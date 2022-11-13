@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<html>
 <title>profile update</title>
  <link rel="icon" type="image/x-icon" href="image/favicon.ico">

<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title> Update your info</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">

</head>

<body>

    <form method="POST" action="{{route('profileUpdateSubmitted')}}">
        {{@csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{$pros->teacher->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <div style="color: red">{{$pros->email}}</div>

        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" name="phone" class="form-control" id="phone" value="{{$pros->teacher->phone}}">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Dob</label>
            <input type="dob" name="dob" class="form-control" id="dob" value="{{$pros->teacher->dob}}">
        </div>
        <div class="mb-3">
            <label for="qualification" class="form-label" >Qualification</label>
            <div style="color: red;">{{$pros->teacher->qualificattion}}</div>

        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
                      <input type="hidden" name="registration_id" value="{{$pros->teacher->registration_id}}" class="form-control" >
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
</body>

</html>