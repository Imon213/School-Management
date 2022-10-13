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
    <title>Document</title>
    <style>
    body {
        background-color: whitesmoke;
    }

    .Story_container {
        background-color: white;
        width: 70%;
        margin: 20px auto;
        box-shadow: 5px 5px 10px gray;
        padding: 20px;
        opacity: .9;
    }

    a {
        text-decoration: none;
    }
    </style>

</head>

<body>
    <div class="Story_container">
        <h2 class="text-center text-primary">UPLOAD CLASS ROUTINE</h2>
        <form action="{{route('getsubject')}}" method="post">
            @csrf
            <label for="class_name">Select Class for the class routine</label>
            <select name="class_name" id="class_name" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>

                <option value="one">One</option>
                <option value="two">Two</option>

            </select> <br>

            <label for="subject_id">Select  subject for class routine</label>
            <select name="subject_id" id="subject_id" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach($subject as $item)
                <option value="{{$item->id}}">{{$item->subject_name}}</option>
                @endforeach
            </select> <br>

            <label for="day">Select day for the class</label>
            <select name="day" id="day" class="form-select" aria-label="Default select example">

                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
            </select> <br>
            <label for="start">Select Starting Time:</label>
            <input class="form-control" type="time" id="start" name="start"><br>
            <label for="end">Select Ending Time:</label>
            <input class="form-control" type="time" id="end" name="end"><br>

            <input type="submit" class="btn btn-success" value="SUBMIT">
        </form>
    </div>
    < </body>

</html>

@endsection