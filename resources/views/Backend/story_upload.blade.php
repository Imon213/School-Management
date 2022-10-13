@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Upload story</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
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
        <h2 class="text-center text-primary">UPLOAD YOUR STORY</h2>
        <form action="{{route('story_upload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">Title</label>
            <input id="name" type="text" name="title" class="form-control name" placeholder="Enter title"><br>

            <label for="category">Select a Story category</label>
            <select name="category" id="category" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="funny">Funny</option>
                <option value="goast">Goast</option>
                <option value="sciencefriction">Science Friction</option>
            </select> <br>

            <label for="image">Select an Image(optional)</label>
            <input class="form-control" type="file" id="image" name="image"><br>
            <textarea rows="10" style="width:100%;" name="story" placeholder="Write your story here....."></textarea><br><br>

            <input type="submit" class="btn btn-success" value="SUBMIT">
        </form>
    </div>


</body>

</html>
@endsection