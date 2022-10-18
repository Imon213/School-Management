@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
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
    <div class="container">

        <div class="form-input">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="form-control" id="search" name="search"
                placeholder="Type here to search any user">
        </div>
        <a href="" class="btn btn-success my-3" data-toggle="modal" data-target="#exampleModal">
            Registration</a>

        <div class="row user-table">

            <div class="col-md-12 col-sm-6 table-data">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Email</th>
                            <th>NID/BCN</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $key=>$users)
                        <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->bcn}}</td>
                            <td>{{$users->type}}</td>
                            @if($users->status =='incomplete')
                            <td class="text-danger">{{$users->status}}</td>

                            <td><a class="btn btn-success" href="/student/{{$users->id}}"><i
                                        class="fa-solid fa-address-card"></i></a></td>
                            <td><a href="javascript:void(0)" id="show-modal"
                                    data-url="{{route('delete_reg', $users->id)}}" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></a></td>


                            @else
                            <td class="text-primary">{{$users->status}}</td>
                            <td><a class="btn btn-primary" href="/edituser/{{$users->id}}"><i class="fa-solid fa-user-pen"></i></a></td>
                            <td><a href="javascript:void(0)" id="show-modal"
                                    data-url="{{route('delete_reg', $users->id)}}" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></a></td>


                            @endif
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                {!!$user->links()!!}
            </div>

        </div>
        @include('Backend.delete_user_modal')
        @include('Backend.registration_all_user')


        <script>
        $(document).ready(function() {
            $(document).on('keyup', '#search', function() {
                var query = $(this).val();
                fetch_user_data(query);
            });

            function fetch_user_data(query = '') {
                $.ajax({
                    url: "{{ route('get_user') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },

                    success: function(res) {


                        $('.table-data').html(res);
                        /* $('#total_records').text(data.total_data); */
                    }
                })
            }




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