@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

    </style>
</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
    <div class="card-body">
        <div class="account-settings">
            <div class="user-profile">
                <div class="user-avatar">
                    <img src="timage/{{Session::get('picture')}}" alt="Maxwell Admin">
                    <a href="{{route('changePicture')}}">edit</a>
                </div>
                <h5 class="user-name">{{$pros->teacher->name}}</h5>
                <h6 class="user-email">{{$pros->email}}</h6>
            </div>
     
 
        </div>
    </div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
            <form method="POST" action="{{route('profileUpdateSubmitted')}}">
        {{@csrf_field()}}
    <div class="card-body">
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mb-2 text-primary">Personal Details</h6>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" value="{{$pros->teacher->name}}">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="eMail">Date of birth</label>
                    <input type="date" class="form-control" id="eMail" placeholder="Enter date of birth" name="dob" value="{{$pros->teacher->dob}}">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="{{$pros->teacher->phone}}">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="website">Qualification</label>
                    <input type="text" class="form-control" id="website" placeholder="Website url" name="qualification" value="{{$pros->teacher->qualificattion}}">
                </div>
            </div>
        </div>
<!--         <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mt-3 mb-2 text-primary">Address</h6>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="Street">Street</label>
                    <input type="name" class="form-control" id="Street" placeholder="Enter Street">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="ciTy">City</label>
                    <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="sTate">State</label>
                    <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="zIp">Zip Code</label>
                    <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                </div>
            </div>
        </div> -->
         <input type="hidden" name="registration_id" value="{{$pros->teacher->registration_id}}" class="form-control" >
        <br>
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
@endsection
