@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 	       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title></title>


</head>

<body>

    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    <div class="row">

        <div class="col-md-2">
            <select name="session" id="session" class="form-select" aria-label="Default select example">
                <option>Open this for select session</option>
                @foreach ($ss as $s)
                <option selected value={{$s->id}}>{{$s->session_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <select name="class_name" id="class_name" class="form-select" aria-label="Default select example">
                <option selected>Open this for select class</option>
                @foreach ($d as $ds)
                <option id="add_subject" value={{$ds->id}}>{{$ds->class_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 subject">

        </div>
        <div class="col-md-2 exam">

        </div>



        <div class="col-md-3 title">
           
        </div>

    </div>


    <div class="row user-table" style="margin-top:60px">

        <div class="col-md-12 col-sm-6 table-data">
            <h3 class="text-center">No Student Found. Try to filter....</h3>

        </div>
    </div>


    <script type="text/javascript">
    $(document).on('click', '#upload_marks', function() {
        var currentRow = $(this).closest("tr");
        var stu_id = currentRow.find("#stu_id").val();
        var score = currentRow.find("#score").val();
        var mark_id = currentRow.find("#mark_id").val();
        let class_id = $('#class_name').val();
        let session_id = $('#session').val();
        let subject_id = $('#sub').val();
        $.ajax({
            url: "{{route('add_student_marks')}}",
            method: 'GET',
            data: {
                stu_id : stu_id,
                score : score, 
                mark_id : mark_id,
                class_id : class_id, 
                session_id : session_id,
                subject_id : subject_id
            },
            success: function(res) {
                alert(res);
            }
        })
   });

$(document).on('click', '#filter', function() {
       
        let title = $(this).val();
        $.ajax({
            url: "{{route('filter_student_mark')}}",
            method: 'GET',
            data: {
                title:title
            },
            success: function(res) {
                $('.table-data').html(res);
            }
        })
       
    });

     $(document).on('click', '#add_exam', function() {
        let exam = $(this).val();
        let session_id = $('#session').val();
        let class_id = $('#class_name').val();
        let subject_id = $('#sub').val();
        $.ajax({
            url: "{{route('add_title')}}",
            method: 'GET',
            data: {
                exam:exam,
                session_id:session_id,
                class_id:class_id,
                subject_id: subject_id

            },
            success: function(res) {
                $('.title').html(res);
            }
        })
        
    });


    $(document).on('click', '#add_sub', function() {
        let sub_id = $(this).val();
        $.ajax({
            url: "{{route('add_exam')}}",
            method: 'GET',
            data: {
                sub_id: sub_id,

            },
            success: function(res) {
                $('.exam').html(res);
            }
        })
    });

    $(document).on('click', '#add_subject', function() {
        let sub_id = $(this).val();
        $.ajax({
            url: "{{route('add_subject')}}",
            method: 'GET',
            data: {
                sub_id: sub_id,

            },
            success: function(res) {
                $('.subject').html(res);
            }
        })
    });
    $(document).ready(function() {
        $(document).on('click', '.atten', function(e) {

            let roll1 = $('.roll').val();


        })
        $(document).on('click', '#add-more', function(e) {
            e.preventDefault();
            var cls = $('#class_name').val();
            var session = $('#session').val();
            $.ajax({
                url: "{{ route('filterStudent') }}",
                method: 'GET',
                data: {
                    class: cls,
                    session: session,
                },
                success: function(res) {
                    $('.table-data').html(res);
                }
            });
        });


        $(document).on('click', '#takeatten', function(e) {

            var cls = $('#class_name').val();
            var subject = $('#subject').val();
            var date = $('#date').val();
            $.ajax({
                url: "{{ route('takeatten') }}",
                method: 'GET',
                data: {
                    class: cls,
                    subject: subject,
                    date: date,
                },
                success: function(res) {
                    $('.table-data').html(res);
                }
            });

        });

    })
    </script>
</body>

</html>
@endsection