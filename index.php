<?php include("dbConfig.php"); ?>
<!Doctype html>
<html lang="en">
    
    <head>
        
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         <!-- Bootstrap -->
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

<style>
     
      .slideshow {
        margin: 0 auto;
        width: 100%;
		height:500;
      }
	  
	  p{
		  font-family: Sans-Sharif;
		  
	  }
	  
</style>
        
    </head>
    
    <body>
       <!-- <div class="container"> -->
        <div id="wrapper">
            
            <header>
			
			<div id="logo">
				<a href="hospital.php"><img src="images/logo.jpg"/> </a>
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
					<input type="text" placeholder="search anythings for your need..." class ="form-control">
					</div>
                

            </header>
            
           
                    <!-- slideshow ster --> 
                    <div id="slideshow">
                        
                    <div class="slideshow">
		 
         <ul id="bxslider">
		 
  <li><img src="images/p1.jpg" height="500px" width="100%" title="" /></li>
  <li><img src="images/p2.jpg" height="500px" width="100%" title="" /></li>
  <li><img src="images/p3.jpg" height="500px" width="100%" title="" /></li>
 
		</ul>
		
		
		
		
<!-- <div id="slide_box"></div> -->
		
	
		</div>	
		  </div>
                    
               <!-- slideshow end -->   
              
			  
			  <!-- manubar bottom star -->
				<div id="manubar_bottom">
					<div id="manubar_bottom_part1">
						<p> Schedule your appointment online</p>
					</div>
							
					<div id="manubar_bottom_part2">
						<a href="appointment.php"><button type="button" class="btn btn-default">On Line Appointment</button></a>
					</div>
				</div>
				<!-- manubar bottom end -->
				
				<div id="wrapper_2">
				
				<div id="aside_right">
				
				<a href="find_doctor.php"><button type="button" class="button2 btn btn-primary">Find Doctors</button></a>
				<a href="appointment.php"><button type="button" class="button2 btn btn-primary">Appointment</button></a>
				<a href="health.php"><button type="button" class="button2 btn btn-primary">Health Queries</button></a>
				<a href="health.php"><button type="button" class="button2 btn btn-primary">Health Care</button></a>
				<a href="Contact.php"><button type="button" class="button2 btn btn-primary">Contact Us</button></a>
				
				</div>
				
				<article>
				<p style="text-align:justify; padding:5px">
                            <strong>HMS Specialized Hospital,</strong> a concern of <a href="/" target="_blank">HMS Group</a>
                            is the only multi-disciplinary super-specialty tertiary care hospital in Bangladesh, confidently providing 
                            comprehensive health care with the latest medical, surgical and diagnostic facilities. These services are 
                            provided by expert medical professionals, skilled nurses and technologists using technology.  
                            <br><br>
                            <strong>HMS Specialized Hospitalhas,</strong>  a concern of tal with wide range of 
services and specialists, equipments and technology, ambience and service quality. The hospital is a 
showcase of synergy of medical technology and advances in IT through paperless medical records. The 
skilled nurses, technologists and administrators of <strong> HMS Specialized Hospital,</strong> aided 
provide a congenial infrastructure for the medical professionals in providing 
healthcare of international standards.
							</p>
							
							<h5>
							<strong>Inpatient facilities</strong>
						<p>250 Inpatient Beds<br>Adult Intensive Care Units<br>Neonatal Intensive Care Unit</p>
<strong>Outpatient facilities</strong>
<p>24-hour Emergency care<br>Ambulance & Mobile Critical Care Fleet<br>Outpatient Surgery Service</p>
<strong>Special Facilities</strong><br>

10 Operation Theaters<br>
MRI, CT and Lithotripsy<br>
Digital Radiology<br>
</h5>

<button id="clickme" class="btn btn-basic">Click Me...</button>	
				</article>
				
				<div id="aside_left">
										<h3 style= "color: #00b8e6">Latest News & Events</h3>
					
                       
                        <marquee behavior="scroll" align="top" direction="up" scrolldelay="400" onMouseMove="this.stop();"   onMouseOut="this.start();"> 
                             <p>
<>On the occasion of International Women's Day, 8th March,<br>
<>strategy for patient safety improvement and imparting technical knowledge<br>
<>Cancer Care conclave and Cancer C I respectively for the year 2017<br>
<>Head Neck Surgery at Apollo Hospitals<br>
<>National Forum & Workshop on infection Control 2017
							</p> </marquee><br><br>
								 <h3 style= "color: #00b8e6">HMS Hotline :</h3>
<p>24 hours Emergency: 01713333337<br>
HMS Cardiac customer care: 01766663222<br>
HMS Specialized customer care: 01766662111<br>
HMS Cardiac admission: 01766660444<br>
HMS Specialized admission: 01766661222<br>
HMS Home Service:<br>
01766661452<br>
01766661900</p>
				</div>
				
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
</script>
    
</html>