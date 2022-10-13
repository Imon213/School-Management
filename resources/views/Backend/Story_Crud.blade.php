@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage story</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div>


        <table class="table table-hover" style="width:90%;">
            <thead>
                <th class="text-start">Title</th>
                <th class="text-start">Category</th>
                <th>Story</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                @foreach($story as $item)
                <tr>
                    <td class="text-start">{{$item->title}}</td>
                    <td class="text-start">{{$item->category}}</td>
                    <td>{{substr($item->story,0,70)}}.....</td>
                    <td> <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-trash text-danger"></i></button></td>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure that you want to delete this story?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    <a href="/delete_story/{{$item->id}}"> <button class="btn btn-primary" @if(session('msg')) data-bs-dismiss="modal" @endif>Delete</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <td><a href="/delete_story/{{$item->id}}"><button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></a></td> -->
                    <td><a href="/edit_story/{{$item->id}}"><button class="btn"><i class="fa-solid fa-pen-to-square text-primary"></i></button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span class="text-center text-success">@if(session('msg'))
            {{session('msg')}}
            @endif
        </span>
        {!! $story->links() !!}
    </div>
    </div>

</body>

</html>
@endsection