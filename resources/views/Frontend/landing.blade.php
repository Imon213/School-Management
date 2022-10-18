<html>

<head>
    <title>
        Home
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #fff;
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .menu-bar {
            background: rgb(0, 100, 0);
            text-align: center;
        }

        .menu-bar ul {
            display: inline-flex;
            list-style: none;
            color: #fff;
        }

        .menu-bar ul li {
            width: 100px;
            margin: 15px;
            padding: 15px;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: #fff;

        }

        .active,
        .menu-bar ul li:hover {
            background: #2bab0d;
            border-radius: 0px;
        }

        .menu-bar-icon {
            color: #fff;
            background: #2bab0d;
            font-size: 100px;
        }
    </style>
</head>

<body>
    <div class="menu-bar">
        <!-- <div class="menu-bar-icon">
            <i class="fa fa-book-open-reader"></i>
        </div> -->
        <ul>
            <li class="active"><a href="#"><i class="fa fa-house"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-user"></i>About Us</a></li>
            <li><a href="#"><i class="fa fa-book"></i>Blog</a></li>
            <li><a href="#"><i class="fa fa-chalkboard-user"></i>Faculty</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
            <li><a href="{{route('login')}}"><i class="fa fa-right-to-bracket"></i>Login</a></li>
        </ul>
    </div>
</body>

</html>