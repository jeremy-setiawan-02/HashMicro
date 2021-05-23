@extends('master.master')

@section('content')
<div class="container">
    <div class="card mx-auto" style=" margin: 5% 0 5% 0">
        <div class="card-header">
            <h3>Register</h3>
        </div>
        <div class="card-body">
            <form style="margin : 10px 10px 10px 10px" method="POST" action="/RegisterAction">
            {{csrf_field()}}
            @if ($errors->any())
		      <div style="padding-bottom: 10px" class="baris btnDelete" style="background-color: red">
	            @foreach ($errors->all() as $error)
	              - {{ $error }}
	              <br>
	            @endforeach
		      </div>
		    @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="Confirm_Password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea class="form-control" name="address" placeholder="Address"required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Gender : </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input type="date" name="dob" required>
                </div>
                <button type="submit" style="width : 100%" class="btn btn-primary">Register</button>
            </form>
        </div>
    <div>
</div>
@endsection