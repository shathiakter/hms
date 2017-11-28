<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Department</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Department</button>
<p class="alert alert-success" style="display:none">Your payment successfully received</p>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Form</h4>
        </div>
        <div class="modal-body">
		<p class="alert alert-success">You Are Wellcome</p>
		
		<form>
		<div class="form-group">
	
		
				
		Department Name: <input type="text" name="name" id="name" placeholder="Name of Department" class ="form-control" value="" size="30"><br>
		Department discription :<textarea id="" class ="form-control" name=""></textarea>
		
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
