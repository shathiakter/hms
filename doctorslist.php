<?php include("dbConfig.php"); ?>


<html lang="en">
    
    <head>
        
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">

        <title>Hospital</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
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
        <div id="wrapper">
            
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
            <div>
           
                    
		<div >
				<table class="table">
        <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>GENDER</th>
    <th>ADDRESS</th>
    <th>AGE</th>
    <th>CREATE DATE</th>
    <th>ACTION</th>
    
    </tr>
    <?php

$query = mysql_query("SELECT * FROM admin ORDER BY id ASC");

while($data = mysql_fetch_array($query)){
	?>
	<tr>
	<td><?php echo $data['admin_id']; ?></td>
	<td><?php echo $data['admin_name']; ?></td>
	<td><?php echo $data['admin_mobile_no']; ?></td>
	<td><?php echo $data['admin_address']; ?></td>
	<td><?php echo $data['admin_email']; ?></td>
	<td><?php echo $data['admin_password']; ?></td>
	<td><?php echo $data['type']; ?></td>
	<td><?php echo $data['gender']; ?></td>
	<td><a href="">Update</a> | <a href="">Delete</a></td>
	
    </tr>
 
?>

				 </div>     


		
               </div>
		
		  
                    
              
				<div id="manubar_bottom">
					<div id="manubar_bottom_part1">
						<p> Schedule your appointment online</p>
					</div>
							
					<div id="manubar_bottom_part2">
						<button type="button" class="btn btn-default">On Line Appointment</button>
					</div>
				</div>
				<!-- manubar bottom end -->
				<div id="wrapper_2">
				
				<div id="aside_right">
				
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Finds Doctors</button></a>
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Appointments</button></a>
				<button type="button" class="button2 btn btn-primary">For Patient</button>
				<button type="button" class="button2 btn btn-primary">For Patient</button>
				<button type="button" class="button2 btn btn-primary">For Patient</button>
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
                    
                    <p style="text-align: center"; >© 2017 HMS Group. All rights reserved.&nbsp;&nbsp;
					<a href='' style="color:#f2f2f2">Powered by Shathiakter1212@gmail.coms</a> </p>
                
                
            </footer>
            
			
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
</script>
    
</html>