@extends('master.master')

@section('content')
<div class="container">
    <div class="card" style="margin : 15px 0 0 0">
        <div class="card-header">
            <h3>Profile</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-xs-3 col-sm-3">
                    Name
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1">
                    :
                </div>
                <div class="col-md-8 col-xs-8 col-sm-8">
                    {{$data->username}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-3 col-sm-3">
                    Email
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1">
                    :
                </div>
                <div class="col-md-8 col-xs-8 col-sm-8">
                    {{$data->userEmail}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-3 col-sm-3">
                    Address
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1">
                    :
                </div>
                <div class="col-md-8 col-xs-8 col-sm-8">
                    {{$data->userAddress}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-3 col-sm-3">
                    Gender
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1">
                    :
                </div>
                <div class="col-md-8 col-xs-8 col-sm-8">
                    {{$data->userGender}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-3 col-sm-3">
                    Date of Birth (YYYY-DD-MM)
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1">
                    :
                </div>
                <div class="col-md-8 col-xs-8 col-sm-8">
                    {{$data->userDOB}}
                </div>
            </div>
            <a href="/UpdateProfile" style="color: black">
                <div class="row" style="margin: 10px 0 0 0">
                    <button class="btn btn-warning" style="width : 100%"> Update Profile
                </div>
            </a>
        </div>
    </div>
</div>
@endsection