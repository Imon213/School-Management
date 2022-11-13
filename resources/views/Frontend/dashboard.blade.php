<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

@media screen and (max-width:768px) {
            body {
                margin: 0;
                
            }

            .top-nav {
                
                flex-direction: column;
                border: 1px solid lightgray;
            }

            .right-n {
                flex-direction: column;
            }

            .right-n>ul {
                flex-direction: column;
            }

            .right-n>ul>li {
                background-color: skyblue;
                width: 15rem;
                height: 2.5rem;

                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 5px;

            }

            .right-n>ul>li:hover {
                color: #0a58ca;
            }

            .profile {
                margin: 2rem 0;
                padding: 0;
            }
        }

    .top-nav {
        display: flex;
        justify-content: space-between;
        background: whitesmoke;
    }

    .left-n {
        flex: 1;
        display: flex;
        align-item: center;
        justify-content: center;

    }

    .left-n>a>img {
        width: 120px;
        height: 120px;
        border-radius: 100px;
    }

    .right-n {
        flex: 3;
        display: flex;
    }

    .right-n>ul {
        flex: 7;
        display: flex;
        gap: 3rem;
        align-items: center;
        justify-content: center;
    }

    .right-n>ul>li {
        list-style: none;
        font-weight: 200;
    }

    .profile {
        display: flex;
        gap: 3rem;
        align-items: center;
        justify-content: center;
        padding-right: 20px;
    }

    a,
    i {
        text-decoration: none;
        font-size: 20px;
        color: gray;
    }

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 0;
    }

    @media screen and (max-width: 768px) {
        body {
            margin: 0;


        .top-nav {
            display: flex;
            justify-content: space-between;
            background: whitesmoke;
        }

        .left-n {
            flex: 1;
            display: flex;
            align-item: center;
            justify-content: center;

        }

        .left-n>a>img {
            width: 120px;
            height: 120px;
            border-radius: 100px;
        }

        .right-n {
            flex: 3;
            display: flex;
        }

        .right-n>ul {
            flex: 7;
            display: flex;
            gap: 3rem;
            align-items: center;
            justify-content: center;
        }

        .right-n>ul>li {
            list-style: none;
            font-weight: 200;
        }

        .profile {
            display: flex;
            gap: 3rem;
            align-items: center;
            justify-content: center;
            padding-right: 20px;
        }

        a,
        i {
            text-decoration: none;
            font-size: 20px;
            color: gray;
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 0;
        }


        @media screen and (max-width: 768px) {
            body {
                margin: 0;

                .top-nav {
                    display: flex;
                    justify-content: space-between;
                    background: whitesmoke;

                }

                .left-n {
                    flex: 1;
                    display: flex;
                    align-item: center;
                    justify-content: center;

                }

                .left-n>img {
                    width: 120px;
                    height: 120px;
                    border-radius: 100px;
                }

                .right-n {
                    flex: 3;
                    display: flex;
                }

                .right-n>ul {
                    flex: 7;
                    display: flex;
                    gap: 3rem;
                    align-items: center;
                    justify-content: center;
                }

                .right-n>ul>li {
                    list-style: none;
                    font-weight: 200;
                }

                .profile {
                    display: flex;
                    gap: 3rem;
                    align-items: center;
                    justify-content: center;
                    padding-right: 20px;
                }

                a,
                i {
                    text-decoration: none;
                    font-size: 20px;
                    color: gray;
                }

                dl,
                ol,
                ul {
                    margin-top: 0;
                    margin-bottom: 0;
                }

                @media screen and (max-width: 768px) {
                    body {
                        margin: 0;
                    }

                    .top-nav {
                        flex-direction: column;
                        border: 1px solid lightgray;
                    }

                    .right-n {
                        flex-direction: column;
                    }

                    .right-n>ul {
                        flex-direction: column;
                    }

                    .right-n>ul>li {
                        background-color: skyblue;
                        width: 15rem;
                        height: 2.5rem;

                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 5px;

                    }

                    .right-n>ul>li:hover {
                        color: #0a58ca;
                    }

                    .profile {
                        margin: 2rem 0;
                        padding: 0;
                    }
                }

    </style>
    <title>Document</title>

</head>

<body>

    <div class="top-nav">
        <div class="left-n">

            <a href="/dashboard"><img src="Image/imon.png" alt=""></a>


        </div>
        <div class="right-n">
            <ul>

               

                <li><a href="#"><i class="fa-solid fa-book"></i> Books</a></li>
                <li><a href="/viewstory"><i class="fa-solid fa-hippo"></i> Story </a></li>
                <li><a href="/getmarks"> <i class="fa-solid fa-square-poll-vertical"></i> Result</a></li>
                <li> <a href="/notice"><i class="fa-solid fa-bell"></i> Notice</a></li>
            </ul>
            <div class="profile">
                <a href="#"><i class="fa-solid fa-user"></i> {{$student->name}}</a>
                <a href="{{route('lout')}}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @yield('dashboard')
    </div>
</body>

</html>