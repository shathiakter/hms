<?php include("dbConfig.php"); ?>
<!Doctype html>
<html lang="en">
    
    <head>
        
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">

        <title>Doctor</title>
        
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
         <!-- Bootstrap -->
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->


        
    </head>
    
    <body>
       <!-- <div class="container"> -->
        <div >
            
            <header>
			
			<div id="logo">
				<a href=""><img src="images/logo.jpg"/> </a>
			</div>
               <div id="header_nav">
				<ul>				
							  <li><a href='index.php'>HOME</a></li>	  
						   <li><a href='about.php'>ABOUT US</a></li>
                       <li><a href='department.php'>DEPARTMENTS</a></li>
                    <li><a href='patient.php'>FOR PATIENTS</a></li>
                <li><a href='doctor.php'>FOR DOCTOR</a></li>
          </ul>
				</div>
				
				
					<div id="logo">
					<p><br><br><br><img src="images/icon-phone.gif" width="11" height="19" alt="Sydney Adventist Hospital"/> Contact: 123-456-7890</p>
					
					</div>
                

            </header>
            
          
                   
				
				<div id="aside_right">
				
				<a href="find_doctor.php"><button type="button" class="button2 btn btn-primary">Find Doctors</button></a>
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Appointment</button></a>
				<a href="health.php"><button type="button" class="button2 btn btn-primary">Health Queries</button></a>
				<a href="health.php"><button type="button" class="button2 btn btn-primary">Health Care</button></a>
				<a href="Contact.php"><button type="button" class="button2 btn btn-primary">Contact Us</button></a>
				
				</div>
				
				<div class="container">
  <h1>Patient<h1>
  <!-- Trigger the modal with a button -->
  
  <a href="appointment.php"><button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Appointment</button></a>
  <a href="Prescription.php"><button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Prescription</button></a>
  
<p class="alert alert-success" style="display:none">Your Registration successfully done...</p>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PATIENTS DETAILS</h4>
        </div>
        <div class="modal-body">
		<p class="alert alert-success">You Are Wellcome</p>
		
		<form method="post" action="addadmin.php">
		
		<div class="form-group">
	
	
				
		Name: <input type="text" name="name" id="name" placeholder="Name of Admin" class ="form-control" value="" size="30"><br>
		Mobile No: <input type="text" name="mobile" id="mobile" class ="form-control" value="" size="30"><br>
		Address :<textarea name="address" id="address" class ="form-control" ></textarea>
		E-mail: <input type="text" name="mail" id="mail" class ="form-control" value="" size="30"><br>
		Password: <input type="text" name="password" id="" class ="form-control" value="" size="40"><br>
		Admin Type: 
		<label class="checkbox-inline">
                   <input type="radio" name="type" value="1stadmin">1st Admin</label>
                   <label class="checkbox-inline">
                   <input type="radio" name="type" value="others">Others</label>
                   <label class="checkbox-inline">
                   
               </div>
		
		Gender:
		<label class="checkbox-inline">
                   <input type="radio" name="gender" value="male">Male</label>
                   <label class="checkbox-inline">
                   <input type="radio" name="gender" value="female">Female</label>
                   <label class="checkbox-inline">
                   
               </div>
		
		
		
		<div class="modal-footer">
		<input type="Submit" name="submit" class="btn btn-default cls" value="submit">
		
          <button type="button" class="btn btn-default cls" data-dismiss="modal">Close</button>
        </div>
		</div>
		</div>
        
		
		</form>
		
        
        
      </div>
     
    </div>
  </div>
  

</body>

</html>

				
				
                  
             <footer>
                
                        <h4>Follow Us </h4><br>
                        <a href="https://twitter.com/?lang=en"><img src="images/t.png" width="25" height="25"/></a>
                         <a href="https://fb.com"><img src="images/f.png" width="25" height="25"/></a>
                         <a href="https://twitter.com/?lang=en"><img src="images/i.png" width="25" height="25"/></a>
                         <a href="https://bing.com"><img src="images/b.png" width="25" height="25"/></a>
                         <a href="https://youtube.com"><img src="images/y.png" width="25" height="25"/></a>
                         <a href="https://google.com/?lang=en"><img src="images/g.png" width="25" height="25"/></a>
                    
                    <p style="text-align: center"; >© 2017 HMS Group. All rights reserved.&nbsp;&nbsp;
					<a href='' style="color:#f2f2f2">Powered by Shathiakter1212@gmail.coms</a> </p>
                
                
            </footer>
            
			</div>
      <!--  </div> -->
    </body>
    
    
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src = "https:js/jquery.min.js"></script>
      
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "js/bootstrap.min.js"></script>
      

		<script>
		
		$(document).ready(function(){
  $('#bxslider').bxSlider({
	mode: 'horizontal',
    captions: false,
    auto: true
  
});

});

		</script>
		 
<script>
$("#clickme").click(function(){

$('h5').slideToggle('slow');
});
$('.cls').click(function(){
	$('.alert').show();
})
})

</script>
    
</html>
