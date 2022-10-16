<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		    @media only screen and (max-width: 768px) {
      #exampleModal{
        width: 100%;
        margin:0;
       
      }
	</style>
</head>
<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form class="mx-1 mx-md-4" action=""  method="post">
  	@csrf
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header">
  			<h5 class="modal-title" id="exampleModalLabel">Add User</h5>
  			<button type="button" id="close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  		</div>
  			<div class="modal-body">
  		
  			
                            <div class="form-group">
                                 <label  class="form-label" for="form3Example3c">Your Email</label>
                                <input type="email" name="email" id="email" class="form-control" />
                        </div>

                        <div class="form-group">
                           
                                <select name="type" id="type" class="form-select mt-3 mb-2" aria-label="Default select example">

                                    <option value="select a class">select Type</option>
                                    <option value="admin">Admin</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>

                                </select>
                            
                        </div>

                        <div class="form-group">
                            	<label class="form-label" for="form3Example4c">Birth Certificate Number</label>
                                <input type="text" name="bcn" id="bcn" class="form-control" />
                        </div>


                       <div class="form-group">
                            
                                <label class="form-label" for="form3Example4c">Password</label>
                                <input type="password" name="password" id="password" class="form-control" />
                                
                            
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-4 mt-3">
                            <button id="reg" class="btn btn-primary">REGISTRATION</button>
                        </div>

  			
  		
  		</div>
  	</div>
  </form>
</div>
</body>
</html>