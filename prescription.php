<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prescription</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
			
			<div id="logo">
				<a href=""><img src="images/logo.jpg"/> </a>
			</div>
                <div id="header_nav">
				<ul>				
							  <li class='active'><a href='Index.php'>HOME</a></li>	  
						   <li><a href='search student.php'>ABOUT US</a></li>
                       <li><a href='Create account.php'>DEPARTMENTS</a></li>
                    <li><a href='login.php'>FOR PATIENTS</a></li>
                <li><a href='Admin.php'>FOR DOCTOR</a></li>
            <li><a href='search student.php'>CONTACT US</a></li>
          </ul>
				</div>
				
				
					<div id="logo">
					<p><br><br><br><img src="images/icon-phone.gif" width="11" height="19" alt="Sydney Adventist Hospital"/> Contact: 123-456-7890</p>
					
					</div>
                

            </header>
			<div id="aside_right">
				
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Find Doctors</button></a>
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Appointment</button></a>
				<button type="button" class="button2 btn btn-primary">Health Queries</button>
				<button type="button" class="button2 btn btn-primary">Health Care</button>
				<button type="button" class="button2 btn btn-primary">Ambulance</button>
				
				</div>
<div class="container">
  <h2>Prescription</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Prescription</button>
<p class="alert alert-success" style="display:none">Your Registration successfully done...</p>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Prescription Add</h4>
        </div>
        <div class="modal-body">
		
		<form>
		<div class="form-group">
	
		
			
		Doctor: <input type="text" name="name" id="name" placeholder="Name of Doctor" class ="form-control" value="" size="30"><br>
		Patient: <input type="text" name="name" id="name" placeholder="Name of Patient" class ="form-control" value="" size="30"><br>
		Age: <input type="text" name="age" id="" class ="form-control" value="" size="40"><br>
		Gender:
		Male<input type="radio" name="gender" id="gender" value="male">
		Female<input type="radio" name="gender" id="gender" value="female"><br><br><br>
		Case History :<textarea name="history" id="address" class ="form-control" ></textarea><br>
		Medicine: <input type="text" name="medicine" id="" class ="form-control" value="" size="40"><br>
		Test: <input type="text" name="test" id="" class ="form-control" value="" size="40"><br>
		Description: <textarea name="description" id="address" class ="form-control" ></textarea><br>
		
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
<footer>
                
                        <h4>Follow Us </h4><br>
                        <a href="https://twitter.com/?lang=en"><img src="images/t.png" width="25" height="25"/></a>
                         <a href="https://fb.com"><img src="images/f.png" width="25" height="25"/></a>
                         <a href="https://twitter.com/?lang=en"><img src="images/i.png" width="25" height="25"/></a>
                         <a href="https://bing.com"><img src="images/b.png" width="25" height="25"/></a>
                         <a href="https://youtube.com"><img src="images/y.png" width="25" height="25"/></a>
                         <a href="https://google.com/?lang=en"><img src="images/g.png" width="25" height="25"/></a>
                    
                    <p style="text-align: center"; >© 2017 HMS Group. All rights reserved.<a href=''>Powered by HMS IT</a> </p>
                
                
            </footer>
<script>
$(document).ready(function(){
$('.cls').click(function(){
	$('.alert').show();
})
})
</script>
</body>
</html>
