<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>jQuery Event Handling</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style type="text/css">
    .top-right {
        position: absolute;
        top: 1px;
        right: 1px;
    }






    .con {
        position: relative;
        width: 100%;
    }


    #overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #fff;
    }


    .con:hover #overlay {
        opacity: 0.8;
    }



    /*.con:hover .overlay {
  opacity: 0.4;
}*/
    .con-parent:hover .overlay {
        opacity: 0.8;
    }

    .con-parent:hover .details {
        opacity: 0.7;
    }

    a {
        text-decoration: none;
        font-weight: bold;
    }


    .text {
        color: black;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    </style>
</head>






<body>
    @extends('Frontend.dashboard')
    @section('dashboard')

    <h1 class="text-center" style="color: #004ea8;font-weight: bold;">NOTICE</h1>
    <div class="d-flex justify-content-left">
        {!! $notice->links() !!}
    </div>
    @foreach ($notice as $item)

    <div
        style="background-color: white;width: 100%;height: 120px;position: relative;display:flex;box-shadow:5px 5px 10px gray;margin-bottom: 30px">
        <div style="background-color: #2c5dc5;width: 150px;height: 100%;text-align: center;color: white">
            <h5>{{date('d',strtotime($item->created_at))}}</h5>
            <h5>{{date('M',strtotime($item->created_at))}}</h5>
            <h5>{{date('Y',strtotime($item->created_at))}}</h5>

        </div>
        <div style="background-color: white;width: 100%;height: 100%;margin-left: 10px;">
            <div class="con">
                <div class="details">
                    <p style="color: #004ea8;font-weight: bold;">{{$item->event_name}}</p>
                    <p>{{substr($item->description,0,150)}}...</p>
                </div>
                <div id="overlay">

                    <div class="text">

                        <a href="javascript:void(0)" id="show-user" data-url="{{route('notice_details', $item->id)}}"
                            class="btn"><i class=" fa-solid
                            fa-paperclip"></i>Details</a>


                        <!-- <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class=" fa-solid



<<<<<<< HEAD
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class=" fa-solid

                            fa-paperclip"></i>Details</button>
=======
>>>>>>> 04bbb5b28853b12da6afa68c9d33b6b71192466c

                             -->
                    </div>


                    </div>


                </div>

            </div>





       

        </div>





        </div>

    </div>

    @endforeach
    @endsection


    <div id="userShowModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="notice  text-center" style="padding:30px;">
                    <h5 id="user-name" class="text-center text-primary"></h5>
                    <hr>
                    <br><br>
                    <p id="desc"></p>
                </div>
            </div>
        </div>
    </div>


    <hr>
    <script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click', '#show-user', function() {

            var urlData = $(this).data('url');
            $.get(urlData, function(data) {
                $('#userShowModal').modal('show');
                $('#user-name').text(data.event_name);
                $('#desc').text(data.description);
                $('#desc').text(data.description);
            });
        });
    });
    </script>

<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

=======
>>>>>>> 04bbb5b28853b12da6afa68c9d33b6b71192466c
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


</body>

</html>