@extends('Frontend.dashboard')
@section('dashboard')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User dashboard</title>
    <style>
        .container {
            gap: 2rem;
            margin-top: 2rem;
        }

        a {
            text-decoration: none;
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 0;
        }

        @media screen and (max-width:768px) {
            .container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex">
        @foreach ($story as $item)
          <br>
        
        <div class="card" style="width: 18rem;">

            <a href="/story/{{$item->id}}">
                <img src="/Story/{{$item->image}}" class="card-img-top" alt="...">
                <div class="card-title text-center">{{$item->title}}</div>
                <div class="card-body">
                    <p class="card-text">{{substr($item->story,0,80)}}.....</p>
                </div>
            </a>
        </div>

        @endforeach
        
    </div>
    <br>
    <br>
    <div class="d-flex justify-content-center">
            {!! $story->links() !!}
        </div>
</body>

</html>
@endsection