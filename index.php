</*---Hello Test-----*/>

<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Message sent.";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
<div class="container"> 
	<div class="first-section">
    	<div class="col-sm-4">
        	<div class="logo"><a href="#"><img src="images/delta-data-logo.png" alt=""/> </a></span></div> 
        </div>
        
        <div class="col-sm-8">
        	<div class="content">
            	<p>Delta Data’s Data-as-a-Service is a revolutionary new solution, wrapping quality data around powerful processing and management software,  delivering real-time updates, improving quality and implementing with unimaginable ease.</p>
 
<p>Reduce your risk and maximize your time with DaaS. It’s the smart-DaaS solution for your mutual fund data management needs.</p>
            
            </div>
        
        </div>
    
    	
    </div>
    
    <div class="section-section">
    	<div class="col-md-5">
        	<div class="video-section">
            	<div class="video-box">
                	<img class="img-responsive" alt="" src="images/video.png" />
                    <a class="watch_btn" href="#">WATCH VIDEO</a>
                </div>
                
            	
            </div>
        </div>
        <div class="col-md-3">
        	<div class="download-section">
            	<div class="download-box">
                	<img class="img-responsive" alt="" src="images/data_service.png" />
                    <a class="download_btn" href="#">DOWNLOAD BROCHURE</a>
                </div>
                
            
            </div>
        </div>
        <div class="col-md-4">
        	<div class="info-section">
            	<h2>More information.</h2>
                 <form action="action_page.php">
                     
                      <input type="text" name="name" value="" placeholder="Name">
                      
                      <input type="text" name="company" value="" placeholder="Company">
                      
                      <input type="email" name="email" value="" placeholder="Email">
                      
                      <input type="submit" value="request information">
                    </form> 
            
            </div>
        
        </div>
    	
    	
    </div>


</div>



</body>
</html>