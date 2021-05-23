<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request){
    	$rule = array(
    		'nama' => 'required',
    		'userEmail' => 'required|email|unique:user',
    		'Password' => 'required|min:6',
    		'Confirm_Password'=> 'required|same:Password',
    		'address' => 'required',
    		'gender' => 'required',
    		'dob' => 'required'
    	);

    	$validator = Validator::make($request->all(),$rule);
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator->errors());
    	}else{
    		$user = new User;
    		$user->username = $request->nama;
    		$user->userEmail = $request->userEmail;
    		$user->userPassword = Hash::make($request->Password);
    		$user->userAddress = $request->address;
    		$user->userGender = $request->gender;
    		$user->userDOB = $request->dob;
    		$user->userRole = 'Member';
    		$user->save();
    		$notif = 1;
			$message = 'Register Sukses';
    		return view('login');
    	}
	}

    public function login(Request $request){
        $data = User::where('userEmail', $request->userEmail)->first();
        if(!$data)
            return redirect('/Login')->with('alert', 'Email does not exists');

        if(!Hash::check($request->userPassword, $data->userPassword))
            return redirect('/Login')->with('alert', 'Invalid Password');

        Session::put('userEmail', $data->userEmail);
        Session::put('username',explode(" ",$data->userName)[0]);
        Session::put('role',$data->userRole);
        Session::put('isLogin', true);

        if($request->has('remember')){
            Cookie::queue('userEmail', $data->userEmail, '120');
            Cookie::queue('userPassword', $request->userPassword, '120');
        }

        return redirect('/Dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect('/Login');
    }

    public function profile(){
        $data = User::where('userEmail', Session::get('userEmail'))->first();
        if(!$data)
            return redirect('/Dashboard')->with('alert', 'profile not found');

        return view('profile', compact('data'));
    }

    public function updateprofile(){
        $data = User::where('userEmail', Session::get('userEmail'))->first();
        if(!$data)
            return redirect('/Dashboard')->with('alert', 'profile not found');

        return view('updateProfile', compact('data'));
    }

    public function updateUserAction(Request $request,$userId){
        $rule = array(
            'nama' => 'required|min:5',
            'userEmail' => 'required|email|unique:user',
            'Password' => 'required|min:6',
            'Confirm_Password'=> 'required|same:Password',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required'
        );

        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }else{
            User::where('userId',$userId)->update([
                'username' => $request->nama,
                'userEmail' => $request->userEmail,
                'userPassword' => Hash::make($request->Password),
                'userAddress' => $request->address,
                'userGender' => $request->gender,
                'userDOB' => $request->dob,
                'userRole' => $request->role,
            ]);
            $data = User::where('userEmail', $request->userEmail)->first();
            Session::flush();
            Session::put('userEmail', $data->userEmail);
            Session::put('username',explode(" ",$data->userName)[0]);
            Session::put('role',$data->userRole);
            Session::put('isLogin', true);
           
            return redirect("/Profile");
        }
    }

    public function quiz(Request $request){
        $in1 = str_split($request->input1);
        $in2 = str_split($request->input2);
        $jum = 0;
        $persen = 0;
        for($i = 0; $i < count($in1); $i++) {
            $temp = 0;
            for($j = 0; $j < count($in2); $j++) {
                if(strtolower($in2[$j]) == strtolower($in1[$i]) && $temp == 0){
                    $jum = $jum + 1;
                    $temp = $temp + 1;
                }
            }
        }
        $persen = ($jum / count($in1)) * 100;

        return view('quiz', compact('persen'));
    }
}
