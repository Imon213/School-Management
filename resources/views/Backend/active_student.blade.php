@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
    .container {
        position: relative;
    }

  

    td i {
        font-size: 29px;
    }

    .form-input input {
        padding-left: 40px;
    }

    .user-table {
        margin-top: 50px;
    }

    .container {
        position: relative;
    }

   

    .user-table {
        margin-top: 50px;
    }

    @media only screen and (max-width: 768px) {
        .container {
            margin: 0;
            padding: 0 !important;
        }

        #exampleModal {
            width: 100%;
            margin: 0;

        }

        .table-data {

            font-size: 10px;
        }

        .table tr td {
            padding: 5px 0;
            width: 2rem !important;
        }

        .table td a {
            display: flex;
            width: 12px;
            height: 12px;
            font-size: 8px;
            align-items: center;
            justify-content: center;
        }

        .class {
            border: none !important;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="form-input">
            <div class="row">
                <div class="col-lg-4"> <select name="session" id="session" class="form-select"
                        aria-label="Default select example">
                        <option>Select Session</option>
                        @foreach($session as $c)

                        <option value="{{$c->id}}">{{$c->session_name}}</option>

                        @endforeach
                    </select></div>
                <div class="col-lg-4">
                <select name="class" id="class" class="form-select" aria-label="Default select example">
                <option value="">Select Class</option>
                                    @foreach($class as $c)

                                    <option value="{{$c->id}}>{{$c->class_name}}</option>


                                    @endforeach
                                </select></div>
                <div class="col-lg-4">
                <button id="search_active" style="width:300px;" class="btn btn-success"> Filter Student</button>
                </div>
                
            </div>
        </div>

        <div class="row user-table">

            <div class="col-md-12 col-sm-6 table-data">

                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>BCN</th>
                            <th>Status</th>
                            <th>Session</th>
                            <th>Class</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student as $s)
                        <tr>
                            <td>{{$s->student->roll}}</td>
                            <td>{{$s->student->name}}</td>
                            <td>{{$s->bcn}}</td>
                            <td><span class="bg-primary"
                                    style="color:white; border-radius:5px; padding: 5px 10px">{{$s->status}}</span></td>
                            <td>
                            {{$s->student->ssession->session_name}}

                            </td>
                            <td>
                            {{$s->student->sclass->class_name}}
                            </td>
                            <td class="text-center"><a href=""><i class="fa-solid fa-circle-check"></i></a></td>
                            <td class="text-danger"><a href=""><i class="fa-solid fa-xmark"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>



        <script>
        $(document).ready(function() {
            $(document).on('click', '#search_active', function() {
                var session = $('#session');
                var class = $('#class');
               alert('ok');
            });

           


        })
        </script>

</body>

</html>
@endsection