@extends('master.master')

@section('content')
<div class="container">
    <div class="card mx-auto" style="width: 18rem; margin: 15% 0 15% 0">
        <div class="card-header">
            <h3>Login</h3>
        </div>
        <div class="card-body">
            <form style="margin : 10px 10px 10px 10px" id="loginForm" method="POST" action="/LoginAction">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="userPassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" style="width : 100%" class="btn btn-primary">Login</button>
            </form>
        </div>
    <div>
</div>
@endsection