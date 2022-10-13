@extends('Backend.admin')
    @section('content')
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
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @if($ss->image)
                <img  width="150px" src="storage/images/{{$v->image}}">
                @else
                <img  width="150px" src="image/blank_dp.jpg">
                @endif



                <span class="font-weight-bold">{{$ss->name}}</span>
                <span class="text-black-50">{{$ss->email}}</span>
            </div>
            <form class="text-center" method="POST" action="{{route('imgup')}}" enctype="multipart/form-data">
                {{@csrf_field()}}
                <label for="img">Select image:</label>
                <input type="file" id="img" name="img" accept="image/*">
                <input type="submit">
            </form>
            <div class="col-md-5 border-right m-auto text-center">
                <div class="p-3 py-5">
                    <h4 class="text-center"><i>User view</i></h4>
                    <hr>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Name: {{$ss->name}}</label>
                            <hr>
                            <div class="col-md-12">
                                <label class="labels">Email:{{$ss->email}}</label>
                                <hr>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Phone: {{$ss->phone}}</label>
                                    <hr>
                                    <div class="col-md-12"><label class="labels">Address :{{$ss->address}}</label>
                                        <hr>
                                        <div class="col-md-12"><label class="labels">Address Line 2</label>
                                            <hr>
                                            <div class="col-md-12"><label class="labels">Password:{{$ss->password}}</label>
                                                <hr>
                                                <div class="col-md-12"><label class="labels">Status: Admin</label>
                                                    <hr>
                                                    <div class="col-md-12"><label class="labels">###</label>
                                                        <hr>
                                                        <div class="col-md-12"><label class="labels">Email ID</label>
                                                            <hr>
                                                            <div class="col-md-12"><label class="labels">Education</label>
                                                                <hr><br>
                                                                <div><a href="{{route('proup')}}"><button type="button">Add</button></a></div>
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