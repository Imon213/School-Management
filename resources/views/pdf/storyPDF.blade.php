<!DOCTYPE html>
<html>

<head>
    <title>Happy kids </title>
    <style>
        @font-face {
    font-family: "kalpurush";
    font-style: normal;
    font-weight: normal;
    src: url(kalpurush.ttf) format('truetype');
}
* {
    font-family: "kalpurush";
}
    </style>
</head>

<body>
   
    <div class="story">
        <h1> {{$story->title}} </h1>
        <img style="width:300px;"
            src="/Story/{{$story->image}}"><br>

        <div style=" margin-top: 5%;">
       
          <span> {{$story->story}}</span>
        </div>
        
        
    </div>
</body>

</html>