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

    <style>

    </style>
</head>

<body>

    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    <div class="row text-center">
        <div class="col-md-4">
            <select name="class_name" id="class" class="form-select" aria-label="Default select example">
                <option selected>Open this for select class</option>
                @foreach ($class as $ds)
                <option value={{$ds->id}}>{{$ds->class_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <select name="Session" id="session" class="form-select" aria-label="Default select example">
                <option selected>Open this for select Session</option>
                @foreach ($session as $rs)
                <option value={{$rs->id}}>{{$rs->session_name}}</option>
                @endforeach
            </select>

        </div>

        <div class="col-md-4">
            <button id="filter-student" style="height:38px; font-size:14px;" name="" class="btn btn-primary ">Filter
                Student</button>
        </div>

    </div>


    <div class="row user-table" style="margin-top:60px">

        <div class="col-md-12 col-sm-6 table-data">
        <div style="height:200px; display:grid; place-items:center;">
        <h3 style="font-size:30px; color:#183153;font-weight:500;" class="text-center"> No Student Found. Try To Filter..........<i class="fa-solid fa-feather"></i></h3>
        </div>

        </div>
    </div>


    <script type="text/javascript">
    $(document).on('click', '#filter-student', function(e) {
       e.preventDefault();
        var s_id = $('#session').val();
        var c_id = $('#class').val();

        
        $.ajax({
            url: "{{ route('search_active_student') }}",
            method: 'GET',
            data: {
                s_id: s_id,
                c_id: c_id,
                
            },
            success: function(res) {
                $('.table-data').html(res);
            }
        });

    });

    $(document).on('click', '#add', function(e) {
       e.preventDefault();
        var s_id = $('#session').val();
        var c_id = $('#class').val();
        var current_row = $(this).closest('tr');
        var st_id = current_row.find('#s_id').val();
       
        $.ajax({
            url: "{{ route('add_active_student') }}",
            method: 'GET',
            data: {
                s_id: s_id,
                c_id: c_id,
                st_id: st_id
                
            },
            success: function(res) {
               alert(res);
            }
        });

    });
    </script>
</body>

</html>
@endsection