<?php include("dbConfig.php"); ?>
<!Doctype html>
<html lang="en">
    
    <head>
        
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">

        <title>Prescription</title>
        
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
							  <li class='active'><a href='Index.php'>HOME</a></li>	  
						   <li><a href='search student.php'>ABOUT US</a></li>
                       <li><a href='Create account.php'>DEPARTMENTS</a></li>
                    <li><a href='login.php'>FOR PATIENTS</a></li>
                <li><a href='Admin.php'>FOR DOCTOR</a></li>
          </ul>
				</div>
				
				
					<div id="logo">
					<p><br><br><br><img src="images/icon-phone.gif" width="11" height="19" alt="Sydney Adventist Hospital"/> Contact: 123-456-7890</p>
					
					</div>
                

            </header>
            
           
				<div id="wrapper_2">
				
				<div id="aside_right">
				
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Finds Doctors</button></a>
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Appointments</button></a>
				<button type="button" class="button2 btn btn-primary">For Patient</button>
				<button type="button" class="button2 btn btn-primary">For Patient</button>
				<button type="button" class="button2 btn btn-primary">For Patient</button>
				</div>
				<div class="container">
  <?php include("dbConfig.php");
    
    $d_name = $_POST['name'];
	$p_name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
    $c_history=$_POST['history'];
    $medicine=$_POST['medicine'];
	$test=$_POST['test'];
	$description=$_POST['description'];
   


$query = mysql_query("INSERT INTO prescription (doctor_name, patient_name, patient_age, patient_gender, case_history, medicine, test, description) VALUES ('$d_name','$p_name','$age', '$gender','$c_history','$medicine','$test','$description')" );

   if ($query=true){
	   echo "Your Prescription successfully received...";
   }
   
  else 
	echo "Prescription failed...";
?>


  
</div>

</body>

</html>

				
				</div>
                  
             <footer>
                
                        <h4>Follow Us </h4>
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


