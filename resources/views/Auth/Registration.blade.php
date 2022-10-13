<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="registration.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>
        body{
    background-image: url('Image/reg.webp');
    margin: 50px;
    background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100% 100%;
   
}
.reg_form{
    width: 50%;
    margin: 20px auto;
    box-shadow: 5px 5px 10px gray;
    padding: 50px;
    background-color: skyblue;
    opacity: 0.9;
    border-radius: 10px;
    color: white;
}   

.sign_up_btn{
    width: 50%;
}
label{
    color: white;
}
input{
    height: 42px;
    
}
.alert{
    height:25px;
    font-size:13px;
    
}
    </style>
</head>
<body>
   <div class="reg_form">
    <h3 class="text-center">REGISTRATION FORM</h3>
    <div class="text-center">
        
    <h1 class="badge rounded-pill bg-danger">{{Session::get('reg')}}</h1></div>
    <br>
    <form action="{{route('registration')}}"  method="post">
        @csrf

        <label >Full Name</label>
        <input  type="text" name="name" class="form-control" placeholder="Enter Name"><br>
        @error('name')
        <div  class="d-flex align-items-center alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
      

        <label >Email Address</label>
        <input  type="email" name="email" class="form-control" placeholder="Email Address"><br>
        @error('email')
        <div class="d-flex align-items-center alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
       

        <label >Phone Number</label>
        <input type="phone" name="phone" class="form-control" placeholder="Phone Number"><br>
        @error('phone')
        <div class="d-flex align-items-center alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
      
        <label for="birthdaytime">Date of Birth:</label>
        <input class="form-control" type="date" name="dob" id="birthdaytime"><br>
        @error('dob')
        <div class="d-flex align-items-center alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror

        <label for="address" >Current Address</label>
        <input type="address" name="address" class="form-control" placeholder="Current Address"><br>

        @error('address')
        <div class="d-flex align-items-center alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
         
        <label >Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
        @error('password')
        <div class="d-flex align-items-center alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        
        <div class="text-center">
        <span class="">Already  have an account? <a class="success" href="{{route('login')}}"> Now</a></span><br><br>
        <input class="sign_up_btn" type="submit" class="btn btn-primary" value="SIGN UP" >
        </div>
    </form>
   </div>
</body>
</html>