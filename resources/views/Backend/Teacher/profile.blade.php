@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<html>

<head>
    <title>User profile</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <style>
        body {
            background-color: transparent;

        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 15px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    
    <div class="container rounded bg-white mt-5 mb-5">
        <div>
            <div class="col-md-5 border-right m-auto text-center">
                <div class="p-3 py-5">
                    <h4 class="text-center"><i>Teacher Profile</i></h4>
                    <hr>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels" id="name" name="name">Name: {{Session('name')}}</label>
                            <hr>
                            <div class="col-md-12">
                                <label class="labels" id="email" name="email">Email:{{Session('email')}}</label>
                                <hr>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label id="phone" class="labels">Phone: {{Session('phone')}}</label>
                                    <hr>
                                    <div class="col-md-12"><label id="gender" class="labels">Gender :{{Session('gender')}}</label>
                                        <hr>
                                        <div class="col-md-12"><label class="labels">
                                                                <hr><br>
                                                                <div><a href="{{route('profileUpdate')}}"><button type="button" class="btn btn-primary">Edit Profile</button></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
</div>
</div>


   
</body>

</html>
@endsection
