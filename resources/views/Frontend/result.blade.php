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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
    <style>
    .container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        padding: 0;
        border: 1px solid lightgray;
        justify-content: center;
        margin-top: 1rem;
        border-radius: 5px;
    }

    .container>.title {
        padding: 5px;
        border-radius: 5px;
        color: white;
    }

    .middle-title {
        color: white;
        padding: 1rem;
    }

    .middle-title>i {
        color: white;
        font-size: 14px;
    }

    .top-section {
        padding: 0 1rem;
    }

    .end-section {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        border: 1px solid lightgray;
        margin: 0 1rem;
    }

    .end-result {
        margin: 0 1rem;
    }

    .item {
        display: flex;


    }

    .item>span>i,
    .left-end>span>i {
        font-size: 14px;
        font-weight: bold;
    }

    .item>span,
    .left-end>span {
        font-size: 16px;
        font-weight: bold;
        font-family: Sans-serif;
        color: black;
    }

    .marks>h2,
    .right-end>h2 {
        font-size: 16px;
        font-weight: bold;
    }


    .mid-term>.top,
    .final-term>.top {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .mid-term>.end>.distributed-marks,
    .final-term>.end>.distributed-marks {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .mid-term {
        border: 1px solid lightgray;
        display: flex;
        flex-direction: column;
    }

    .end {
        padding: 0 1rem;

        display: flex;
        flex-direction: column;
        gap: 1rem;

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
    </style>
</head>

<body>
    <div class="container">
        <div class="title bg-primary">
            <h3>Exam Result</h3>
        </div>
        <div class="top-section">
            <div class="row">
                <div class="col-md-7">
                    <select name="class_name"  class="form-select" aria-label="Default select example">
                        <option class="bg-primary">Select Session</option>
                        @foreach($active as $item)

                        <option value="{{$item->actclass->id}}" id="class" @if($item->status=="valid") selected @endif >{{$item->actclass->class_name}}
                        </option>

                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="col-md-4 add_subject">
                    <select name="class_name" id="sub" class="form-select" aria-label="Default select example">
                        <option class="bg-primary">Select Subject</option>
                        @foreach($active as $item)
                        @if($item->status=='valid')
                        @foreach($item->actclass->sSubject as $subject)
                        <option id="add_sub" value="{{$subject->id}}" selected>{{$subject->sub_name}}</option>
                        @endforeach
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="end-section">
            <div class="middle-title bg-primary">
                <h3 class="title">{{$sub->sub_name}}</h3>
                <i>Total marks: 100 </i>
                <i> Passing Marks: 33</i><br>
                <i>Contribution: 100%</i>
            </div>
            <div class="end-result">
                <div class="mid-term">
                    <div class="top alert alert-success">
                        <div class="item">
                            <span>Mid Term-2022</span>
                            <span> <i>(Total: 100 </i> <i>Pass: 33%</i> <i>Contribution: 50%)</i></span>
                        </div>
                        <div class="marks">
                            <h2>-(-)</h2>
                        </div>
                    </div>
                    <div class="end">
                        @foreach($mark->where('exam','mid') as $mark)
                        <div class="distributed-marks">
                            <div class="left-end">
                                <span> {{$mark->title}}</span>
                                <span> <i>(Total: {{$mark->marks}} </i> <i>Contribution:
                                        {{$mark->contribution}}%)</i></span>
                            </div>
                            <div class="right-end">
                                <h2>-(-)</h2>
                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>

                <div class="final-term">
                    <div class="top alert alert-success">
                        <div class="item">
                            <span>Final Term</span>
                            <span> <i>(Total: 100 </i> <i>Pass: 33%</i> <i>Contribution: 50%)</i></span>
                        </div>
                        <div class="marks">
                            <h2>-(-)</h2>
                        </div>
                    </div>
                    <div class="end">
                        @foreach($mark->where('exam','final') as $mark)
                        <div class="distributed-marks">
                            <div class="left-end">
                                <span> {{$mark->title}}</span>
                                <span> <i>(Total: {{$mark->marks}} </i> <i>Contribution:
                                        {{$mark->contribution}}%)</i></span>
                            </div>
                            <div class="right-end">
                                <h2>-(-)</h2>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
    $(document).ready(function() {
        $(document).on('click', '#class', function() {
            let sub_id = $('#sub').val();
           let class_id = $(this).val();
           $.ajax({
                    url: "{{route('sub_marks')}}",
                    method: 'GET',
                    data: {
                        sub_id: sub_id,
                        class_id: class_id,
                    },
                    success: function(res) {
                       $('.add_subject').html(res);
                    }
                })
        });
    });

    $(document).ready(function() {
        $(document).on('click', '#add_sub', function() {
           let sub_id = $(this).val();
           $.ajax({
                    url: "{{route('marks_distribution')}}",
                    method: 'GET',
                    data: {
                        sub_id: sub_id,
                      
                    },
                    success: function(res) {
                       $('.end-section').html(res);
                    }
                })
        });
    });
    </script>
</body>

</html>
@endsection