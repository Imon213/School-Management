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

    .academic {
        display: flex;
        justify-content: space-between;
        gap: 2rem;
        padding: 10px 0;
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
        <h5 class="text-center title p-2">STUDENT PROFILE</h3>
            <div class="form-content">


                <br>
                <form action="{{route('studentinfo')}}" method="post">
                    @csrf
                    <div class="academic">
                        <select name="session" id="session" class="form-select" aria-label="Default select example">
                            @foreach($session as $c)

                            <option @if($student->student->sSession->session_name == $c->session_name) selected @endif
                                >{{$c->session_name}}</option>

                            @endforeach
                        </select>

                        <select name="class" id="class" class="form-select" aria-label="Default select example">
                            @foreach($class as $c)

                            <option @if($student->student->sClass->class_name == $c->class_name) selected @endif
                                >{{$c->class_name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <label>Student's full name</label>
                    <input type="text" value="{{$student->student->name}}" name="name" class="form-control"
                        placeholder="Enter Name"><br>


                    <label>Student's father name:</label>
                    <input type="text" value="{{$student->student->fname}}" name="fname" class="form-control"
                        placeholder="Father Name"><br>

                    <label>Student's mother name:</label>
                    <input type="text" value="{{$student->student->mname}}" name="mname" class="form-control"
                        placeholder="Mother Name"><br>


                    <label>Student's phone number</label>
                    <input type="phone" value="{{$student->student->phone}}" name="phone" class="form-control"
                        placeholder="Phone Number"><br>

                    <label for="birthdaytime">Student's date of birth:</label>
                    <input class="form-control" value="{{$student->dob}}" type="date" name="dob" id="birthdaytime"><br>

                    <label for="birthdaytime">Student's gender:</label>
                    <input @if($student->student->gender=='male') checked="checked" @endif class="form-check-input"
                    type="radio" value="{{$student->gender}}" name="gender" value="male"> Male
                    <input @if($student->student->gender=='female') checked="checked" @endif class="form-check-input"
                    type="radio" value="{{$student->gender}}" name="gender" value="female"> Female

                    <br>
                    <br>
                    <label for="address">Student's current address:</label>
                    <input type="address" value="{{$student->student->address}}" name="address" class="form-control"
                        placeholder="Current Address"><br>


                    <label>Student's roll no:</label>
                    <input type="number" value="{{$student->student->roll}}" name="roll" class="form-control"
                        min="100000" placeholder="Enter Roll"><br>


                    <input type="hidden" name="id" value="{{$student->student->id}}" class="form-control">

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary sign_up_btn" value="EDIT INFORMATION">
                    </div>
                </form>
            </div>
</body>

</html>