<!DOCTYPE html>
<html>

<body>
<div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @if($v->image)
                <img  width="150px" src="storage/images/{{$v->image}}">
                @else
                <img  width="150px" src="image/blank_dp.jpg">
                @endif



                <span class="font-weight-bold">{{$ss->name}}</span>
                <span class="text-black-50">{{$ss->email}}</span>
            </div>
</body>
</html>