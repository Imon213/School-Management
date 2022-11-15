<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

 	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form class="mx-1 mx-md-4" id="form-submit"  method="post" action="{{route('studentmsg1')}}">
  	@csrf
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header">
  			<h5 class="modal-title" id="exampleModalLabel">New Email</h5>
  			<button type="button" id="close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  		</div>
  			<div class="modal-body">
 		<input type="email" name="from" id="from" style="border: none;outline: none; width: 300px; " readonly>
 		<hr>
 		<input type="email" name="to" placeholder="Recipent" style="border: none;outline: none; width: 300px;">
 		<hr>
 		<input type="text" name="subject" placeholder="subject" style="border:none;outline: none;">
 		<hr>
  		<textarea id="text" name="text" rows="12" cols="60" placeholder="body" style="border: none"></textarea>
 		<button type="submit" class="btn btn-primary">send</button>
 
  		</div>
  	</div>
  </form>
</div>
</body>
</html>