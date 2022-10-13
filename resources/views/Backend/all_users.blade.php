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
    </style>
</head>

<body>
    <div class="container">
        <div class="form-input">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="form-control" id="search" name="search"
                placeholder="Type here to search any user">
        </div>
        <div class="row user-table">
            <div class="col-md-12 table-data">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Email</th>
                            <th>NID/BCN</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $users)
                        <tr>
                            <td>{{$users->email}}</td>
                            <td>{{$users->bcn}}</td>
                            <td>{{$users->type}}</td>
                            <td>{{$users->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!$user->links()!!}
            </div>
        </div>
    </div>

    <script>
    // $(document).ready(function() {

    //     fetch_user_data();

    //     function fetch_user_data(query = '') {
    //         $.ajax({
    //             url: "{{ route('get_user') }}",
    //             method: 'GET',
    //             data: {
    //                 query: query
    //             },
    //             dataType: 'json',
    //             success: function(data) {
    //                 $('tbody').html(data.table_data);
    //                 //    $('#total_records').text(data.total_data);
    //             }
    //         })
    //     }

    //     $(document).on('keyup', '#search', function() {
    //         var query = $(this).val();
    //         fetch_user_data(query);
    //     });
    // });

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
    </script>
</body>

</html>
@endsection