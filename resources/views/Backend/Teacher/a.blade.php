@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<style>
    .container {
        position: relative;
    }

    .form-input {
        display: flex;
        width: 50%;
        margin: 0 auto;
        align-items: center;
        position: relative;

    }

    .form-input i {
        position: absolute;
        left: 2%;
    }

    .form-input input {
        padding-left: 40px;
    }

    .user-table {
        margin-top: 50px;
    }

    .container {
        position: relative;
    }

    .form-input {
        display: flex;
        width: 50%;
        margin: 0 auto;
        align-items: center;
        position: relative;

    }

    .form-input i {
        position: absolute;
        left: 2%;
    }

    .form-input input {
        padding-left: 40px;
    }

    .user-table {
        margin-top: 50px;
    }

    @media only screen and (max-width: 768px) {
        .container {
            margin: 0;
            padding: 0 !important;
        }

        #exampleModal {
            width: 100%;
            margin: 0;

        }

        .table-data {

            font-size: 10px;
        }

        .table tr td {
            padding: 5px 0;
            width: 2rem !important;
        }

        .table td a {
            display: flex;
            width: 12px;
            height: 12px;
            font-size: 8px;
            align-items: center;
            justify-content: center;
        }
    </style>


</head>
<body>
	<div class="row">
	<div class="col-md-3">
		<input type="date" name="cal">
	</div>
                <div class="col-md-3">
                    <select name="class_name" id="class_name" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select class</option>
                        
                    </select>
                </div>
                
                <div class="col-md-3">
                    <select name="sections" id="sections" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select section</option>
                        
                    </select>
                
            </div>

           <div class="col-md-3">
            <button id="add-more" name="" class="btn btn-primary ">Filter Attendance</button>
        </div>
        </div>
        <div class="container">

        <div class="form-input">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="form-control" id="search" name="search"
                placeholder="Type here to search any user">
        </div>
        <a href="" class="btn btn-success my-3" data-toggle="modal" data-target="#exampleModal">
            Attendance</a>

        <div class="row user-table">

            <div class="col-md-12 col-sm-6 table-data">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>student_id</th>
                            <th>class_model id</th>
                            <th>session _id</th>
                            <th>subject_id</th>
                            <th>attendance</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ss as $key=>$users)
                        <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$users->student_id}}</td>
                            <td>{{$users->class_model_id}}</td>
                            <td>{{$users->session_id}}</td>
                            <td>{{$users->subject_id}}</td>
                             <td>{{$users->attendance}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                {!!$ss->links()!!}
            </div>

        </div>
        <script>
        



            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                User(page);
            })

            function User(page) {
                $.ajax({
                    url: "/pagination/paginate-data?page=" + page,
                    success: function(res) {
                        $('.table-data').html(res);
                    },
                })
            }


            $(document).on('click', '#close', function(e) {
                /* e.preventDefault(); */
                /* $("#exampleModal .close").click() */
                $('#form-submit')[0].reset();
                $('#exampleModal').modal().hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            });
            $(document).on('click', '#reg', function(e) {
                e.preventDefault();
                let email = $('#em').val();
                let type = $('#type').val();
                let bcn = $('#bcn').val();
                let password = $('#password').val();
                $.ajax({
                    url: "{{route('registration')}}",
                    method: 'GET',
                    data: {
                        email: email,
                        type: type,
                        bcn: bcn,
                        password: password
                    },
                    success: function(res) {
                        if (res == 'success') {
                            $('#exampleModal').modal().hide();
                            $('#form-submit')[0].reset();
                            $('table').load(location.href + ' .table');
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();

                        }
                    }
                })


            });
            $('body').on('click', '#show-modal', function() {

                var urlData = $(this).data('url');
                $.get(urlData, function(data) {
                    $('#my-modal').modal('show');
                    $('#email').text(data.email);
                    $('#link').attr("href", "delete_user/" + data.id);

                });
            });

            $(document).on('click', '#cancel', function(e) {
                $('#my-modal').modal('hide');

            });

         



        });
        </script>
</body>
</html>
@endsection