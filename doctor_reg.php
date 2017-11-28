<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Doctor</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Registration</button>
<p class="alert alert-success" style="display:none">Your Registration successfully done...</p>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DOCTOR DETAILS</h4>
        </div>
        <div class="modal-body">
		<p class="alert alert-success">You Are Wellcome</p>
		
		<form>
		<div class="form-group">
	
		
				
		Name: <input type="text" name="name" id="name" placeholder="Name of Doctor" class ="form-control" value="" size="30"><br>
		Mobile No: <input type="text" name="" id="mobile" class ="form-control" value="" size="30"><br>
		Address :<textarea id="address" class ="form-control" name="address"></textarea>
		E-mail: <input type="text" name="" id="" class ="form-control" value="" size="30"><br>
		Password: <input type="text" name="" id="" class ="form-control" value="" size="40"><br>
		Department: <input type="text" name="" id="" class ="form-control" value="" size="40"><br>
		Gender:
		Male<input type="radio" name="gender" id="gender" value="male">
		Female<input type="radio" name="gender" id="gender" value="female"><br><br><br>
		
		<input type="Submit" class="btn btn-default cls" name="submit" value="submit">
		
		</div>
		</form>
		
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default cls" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>
$(document).ready(function(){
$('.cls').click(function(){
	$('.alert').show();
})
})
</script>
</body>
</html>
