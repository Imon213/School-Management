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
    <div class="row text-center">
        <div class="col-md-2">
            <input id="date" class="form-control" type="date" name="cal">
        </div>
        <div class="col-md-3">
            <select name="class_name" id="class_name" class="form-select" aria-label="Default select example">
                <option selected>Open this for select class</option>
                @foreach ($d as $ds)
                <option value={{$ds->id}}>{{$ds->class_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <select name="subject" id="subject" class="form-select" aria-label="Default select example">
                <option selected>Open this for select subject</option>
                @foreach ($v as $rs)
                <option value={{$rs->id}}>{{$rs->sub_name}}</option>
                @endforeach
            </select>

        </div>

        <div class="col-md-2">
            <button id="add-more" style="height:38px; font-size:14px;" name="" class="btn btn-primary ">Filter Attendance</button>
        </div>
        <div class="col-md-2">
            <button id="takeatten" style="height:38px; font-size:14px;" name="" class="btn btn-success ">Take Attendance</button>
        </div>
    </div>


    <div class="row user-table" style="margin-top:60px">

        <div class="col-md-12 col-sm-6 table-data">
            <h3 class="text-center">No Attendence Found. Try to filter....</h3>

        </div>
    </div>


    <script type="text/javascript">
    $('#my-data').ready(function() {
      $(document).on('click','#record',function(){
        var currentRow = $(this).closest("tr");
        var stu_id = currentRow.find("#stu_id").val();
        var sub_id = currentRow.find("#sub_id").val();
        $.ajax({
                url: "{{ route('atten_record') }}",
                method: 'GET',
                data: {
                    stu_id: stu_id,
                    sub_id: sub_id,
                },
                success: function(res) {
                    $('.table-data').html(res);
                   
                   
                }
            });
            
      })

        $(document).on('click', '.atten', function(e) {
            var value = $(this).val();
            var currentRow = $(this).closest("tr");
            var stu_id = currentRow.find("#stu_id").val();
            var sub_id = currentRow.find("#sub_id").val();
            var date = $('#date').val();
           
           
            $.ajax({
                url: "{{ route('atten_submit') }}",
                method: 'GET',
                data: {
                    stu_id: stu_id,
                    sub_id: sub_id,
                    date: date,
                    atten:value,
                },
                success: function(res) {
                   if(res=='success')
                   {
                    currentRow.find(".marks").text(value);
                   }
                }
            });
            

        })
        $(document).on('click', '#add-more', function(e) {
            e.preventDefault();
            var cls = $('#class_name').val();
            var subject = $('#subject').val();
            var date = $('#date').val();
            $.ajax({
                url: "{{ route('filter') }}",
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