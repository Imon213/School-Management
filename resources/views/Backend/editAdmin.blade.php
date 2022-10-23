<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="registration.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>
    body {
        /* background-image: linear-gradient(to right, dodgerblue ,mediumpurple); */
        background-color: whitesmoke;

    }

    .reg_form {
        width: 50%;
        margin: 20px auto;
        box-shadow: 5px 5px 10px gray;

        background-color: white;

        border-radius: 10px;
        color: black;
    }

    .title {
        background-color: black;
        color: white;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-content {
        padding: 20px 50px;
    }

    .sign_up_btn {
        width: 50%;
    }

    label {
        color: black;
    }

    input {
        height: 42px;

    }

    .alert {
        height: 25px;
        font-size: 13px;

    }

    @media only screen and (max-width: 1200px) {
        .reg_form {
            width: 80%;


        }
    }

    @media only screen and (max-width: 748px) {
        .reg_form {
            width: 100%;
            margin: 0;
        }
    }
    </style>
</head>

<body>
    <div class="reg_form">
        <h5 class="text-center title p-2">Admin BASIC INFORMATION</h3>
            <div class="form-content">


                <br>
                <form action="{{route('editadmin')}}" method="post">
                    @csrf

                    <label>Admin's full name</label>
                    <input type="text"  value="{{$admin->admin->name}}" name="name" class="form-control" placeholder="Enter Name"><br>


                    <label>Admin's phone number</label>
                    <input type="phone" value="{{$admin->admin->phone}}" name="phone" class="form-control" placeholder="Phone Number"><br>

                    <label for="birthdaytime">Admin's date of birth:</label>
                    <input class="form-control" type="date" name="dob" id="birthdaytime" value="{{$admin->admin->dob}}"><br>

                    <label for="birthdaytime">Admin's gender:</label>
                    <input @if($admin->admin->gender=='male') checked="checked" @endif class="form-check-input"
                    type="radio"  name="gender" value="male"> Male
                    <input @if($admin->admin->gender=='female') checked="checked" @endif class="form-check-input"
                    type="radio" name="gender" value="female"> Female
                    <br>
                    <br>

                   
                    <input type="hidden" name="id" value="{{$admin->admin->id}}" class="form-control" >

                    <input type="hidden" name="registration_id" value="{{$admin->admin->registration_id}}" class="form-control">

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary sign_up_btn" value="SUBMIT INFORMATION">
                    </div>
                </form>
            </div>
</body>

</html>