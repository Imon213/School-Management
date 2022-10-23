@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

	<title></title>


</head>
<body>
	<div class="row">
	<div class="col-md-3">
		<input type="date" name="cal">
	</div>
                <div class="col-md-3">
                    <select name="class_name" id="class_name" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select class</option>
                         @foreach ($d as $ds)
                        <option value={{$ds->id}}>{{$ds->class_name}}</option>
                         @endforeach
                    </select>
                </div>
                
                <div class="col-md-3">
                    <select name="sections" id="sections" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select section</option>
                         @foreach ($r as $rs)
                        <option value={{$ds->id}}>{{$rs->sections}}</option>
                         @endforeach
                    </select>
                
            </div>

           <div class="col-md-3">
            <button id="add-more" name="" class="btn btn-primary ">Filter Attendance</button>
        </div>
        </div>
</body>
</html>
@endsection