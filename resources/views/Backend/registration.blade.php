@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
    @media only screen and (max-width: 768px) {
      .card-body{
        width: 100%;
        margin:0;
       
      }
      img{
        height:200px !important;
        width:200px;
      }
    
    }
    </style>
</head>

<body>

    <div class="card text-black" style="border-radius: 25px;">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-3">Sign up</p>

                    <form class="mx-1 mx-md-4" action="{{route('registration')}}"  method="post">
                        @csrf

                        <div class="d-flex flex-row align-items-center mb-3">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                 <label  class="form-label" for="form3Example3c">Your Email</label>
                                <input type="email" name="email" id="form3Example3c" class="form-control" />
                               
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <select name="type" id="class" class="form-select" aria-label="Default select example">

                                    <option value="select a class">select Type</option>
                                    <option value="admin">Admin</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>

                                </select>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" name="bcn" id="form3Example4c" class="form-control" />
                                <label class="form-label" for="form3Example4c">Birth Certificate Number</label>
                            </div>
                        </div>


                        <div class="d-flex flex-row align-items-center mb-3">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4c">Password</label>
                                <input type="password" name="password" id="form3Example4c" class="form-control" />
                                
                            </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-4">
                            <input class="sign_up_btn" type="submit" class="btn btn-primary" value="SIGN UP" >
                        </div>

                    </form>

                </div>
                <div class="img-content col-lg-4  d-flex align-items-center justify-content-center">

                    <img style="height: 400px"
                        src="https://clipart.world/wp-content/uploads/2021/01/Classroom-clipart-transparent-background-4.png"
                        class="img-fluid" alt="Sample image">

                </div>
            </div>
        </div>
    </div>

</body>

</html>




@endsection