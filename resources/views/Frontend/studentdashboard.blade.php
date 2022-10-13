@extends('Frontend.dashboard')
@section('dashboard')
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
    .container-fluid {
        display: flex;
        flex-direction:column;
        border: 1px solid lightgray;
    }

    .result {
        flex: 1;
        margin-left:1rem;
        margin-top: 2rem;
        border:1px solid lightgray;
        height:80vh;
        overflow:auto;

        
    }
    .item-r{
        padding: 0 1rem;
        display:flex;
        flex-direction:column;
        gap:1rem;
        margin-top:1rem;
    }
    .title-r{
        font-size: 2rem;
        padding: 1px 1rem;
        color: white;
        border-radius: 5px;
    }

    .class-routine {

        flex: 1;
        display: flex;
        flex-direction: column;
        margin-top: 2rem;
        gap: 2rem;
        border: 1px solid lightgray;
        border-radius: 5px;
        width:70%;

    }

    .c-title {
        font-size: 2rem;
        padding: 0 1rem;
        color: white;
        border-radius: 5px;
    }

    .routine {
        display: flex;
       
        flex-direction: column;
        justify-content: flex-start;
        padding: 0 2rem;
        gap: 2rem;
    }

    .day {
        display: flex;
        gap: 2rem;
        border-bottom: 1px solid lightgray;
        
    }

    .sat {
        width: 20%;
       
    }

    .col-md-4 {
        gap: 2rem;
        width:100%%;
       
    }
    .item-day{
        width:100%;
        
    }

    .item>small {
        font-size: 12px;
        font-weight: bold;
        font-family: sans-serif;
    }

    .item {
        display: flex;
        flex-direction: column;
    }

    .sat {
        font-size: 14px;
        font-weight: bold;


    }

    a,
    i {
        text-decoration: none;
        font-size: 20px;
        color: gray;
    }

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 0;
    }

    body {
        padding: 0;
        margin: 0;
    }
  
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="class-routine">
            <div class="c-title bg-primary">
                <h5>Class Schedule</h5>
                </h5>
            </div>

            <div class="routine">
                <div class="day">
                    <div class="sat">
                        <span>Saturday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','saturday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','saturday') as $item)
                        <div class="col-md-4 d-flex">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- saturday end -->

                <div class="day">
                    <div class="sat">
                        <span>Sunday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','sunday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','sunday') as $item)
                        <div class="col-md-4 d-flex">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- sunday end -->
                <div class="day">
                    <div class="sat">
                        <span>Monday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','monday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','monday') as $item)
                        <div class="col-md-4 d-flex session">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- monday end -->
                <div class="day">
                    <div class="sat">
                        <span>Tuesday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','tuesday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','tuesday') as $item)
                        <div class="col-md-4 d-flex">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- tuesday end -->

                <div class="day">
                    <div class="sat">
                        <span>Wednesday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','wednesday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','wednesday') as $item)
                        <div class="col-md-4 d-flex">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- wednesday end -->
                <div class="day">
                    <div class="sat">
                        <span>Thursday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','thursday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','thursday') as $item)
                        <div class="col-md-4 d-flex">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- thursday end -->
                <div class="day">
                    <div class="sat">
                        <span>Friday</span>
                    </div>
                    <div class="row item-day">

                        @php $count = $routine->where('day','friday')->count() @endphp

                        @if($count > 0)
                        @foreach($routine->where('day','friday') as $item)
                        <div class="col-md-4 d-flex">
                            <div class="item">
                                <span class="text-success">{{$item->subject->subject_name}}</span>
                                <small>Time:{{ $item->start}}-{{$item->end}}</small>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <small>No Class today</small>
                        </div>
                        @endif


                    </div>
                </div>



            </div>
        </div>
        <div class="result">
            <div class="title-r bg-primary">
                <h5>Academic Programs</h5>
            </div>
            <div class="item-r">
                @foreach($program as $item)
                <div class="alert-success px-2">
                    <h5 class="alert-heading">{{$item->subject->subject_name}}</h5>
                    <small style="text-transform: uppercase;font-size:12px;">{{$item->program_name}}
                    <hr>
                    CLASS: {{$item->class_name}} ~
                     DATE & TIME: {{$item->created_at}}
                    </small>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>


</body>

</html>
@endsection