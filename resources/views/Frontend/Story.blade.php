<!DOCTYPE html>
<html>

<head>
    <title>Happy kids </title>
    <link rel="stylesheet" href="css/story.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
</body>
@extends('Frontend.dashboard')
@section('dashboard')
<div class="sidenav">
        <h1>Side nav</h1>
    </div>
    <div class="story">
        <h1> {{$story->title}} </h1>
        <img style="width:300px;"
            src="/Story/{{$story->image}}"><br>
            <a href="/downloadPDF/{{$story->id}}"><button>Download Book</button></a>
        <div style=" margin-top: 5%;">
       
          <span> {{$story->story}}</span>
        </div>
        
        
    </div>
@endsection
</html>