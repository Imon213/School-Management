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
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead>
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Mid Exam</th>
                            <th>Final Exam</th>
                            <th>Grand Total</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>
@endsection