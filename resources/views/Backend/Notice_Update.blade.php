@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>



    <form action="{{route('edit_notice')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="input_container" style="box-shadow:5px 5px 10px gray; margin: 20px 0; padding:20px;">

                    <label>Event Title</label>
                    <input type="text" value="{{$notice->event_name}}" name="title" class="form-control name" placeholder="Enter title"><br>

                    <label>Event Start</label>
                    <input type="date" value="{{$notice->event_start}}" name="start" class="form-control name" placeholder="Enter title"><br>

                    <label>Event End</label>
                    <input type="date" value="{{$notice->event_end}}" name="end" class="form-control name" placeholder="Enter title"><br>

                    <label>Event Created</label>
                    <input type="text" value="{{$notice->created_at}}" name="created" class="form-control name" placeholder="Enter title"><br>



                    <input type="hidden" name="id" value="{{$notice->id}}">
                    <input type="submit" class="btn btn-success" value="EDIT">
                    <span class="text-center text-success">@if(session('msg'))
                        {{session('msg')}}
                        @endif
                    </span>

                </div>

            </div>
            <div class="col-md-6">
                <div class="text-area" style="box-shadow:5px 5px 10px gray; margin:20px 0; padding:20px;">
                    <h3 class="text-center">Description</h3>
                    <textarea style="display: flex;" rows="12" cols="70" name="description">{{$notice->description}}</textarea><br><br>
                </div>
            </div>
        </div>

    </form>

</body>

</html>
@endsection