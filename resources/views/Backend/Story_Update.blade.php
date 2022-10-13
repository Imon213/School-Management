@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update story</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>



    <form action="{{route('edit_story')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="input_container" style="box-shadow:5px 5px 10px gray; margin: 20px 0; padding:20px;">
                    <img style="width:275px;" src="/Story/{{$story->image}}" alt=""><br> <br>
                    <label for="name">Title</label>
                    <input id="name" type="text" value="{{$story->title}}" name="title" class="form-control name" placeholder="Enter title"><br>

                    <label for="category">Select a Story category</label>
                    <select name="category" id="category" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option @if($story->category=='funny') selected
                            @endif
                            value="funny">Funny</option>
                        <option @if($story->category=='goast') selected
                            @endif
                            value="ghost">Ghoast</option>
                        <option @if($story->category=='sciencefriction') selected
                            @endif
                            value="sciencefriction">Science Friction</option>
                    </select> <br>
                    <input type="hidden" name="id" value="{{$story->id}}">
                    <input type="submit" class="btn btn-success" value="EDIT">
                    <span class="text-center text-success">@if(session('msg'))
                        {{session('msg')}}
                        @endif
                    </span>

                </div>

            </div>
            <div class="col-md-6">
                <div class="text-area" style="box-shadow:5px 5px 10px gray; margin:20px 0; padding:20px;">
                    <h3 class="text-center">গল্প</h3>
                    <textarea rows="16" cols="50" name="story">{{$story->story}}</textarea><br><br>
                </div>
            </div>
        </div>
    </form>

</body>

</html>
@endsection