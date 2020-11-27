<!DOCTYPE html>
<html class="not-ie" lang="en">
<head>
  <meta charset="utf-8">
  <title>Ucorpora Demo</title>
	<meta name="description" content="ucorpora demo - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora demo, free, template, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/favicon.ico" rel="icon" type="image/png">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap-override.css" rel="stylesheet">
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
</head>       
<body style="background-color:#FAE5D3;">
  <header id="header">
    <div class="container">
      <div class="row t-container">
        <div class="span3">
          <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
          </div>            
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
	           	<li class="active"><a href="index.php" title="">Home</a></li>
                <li><a title=""><span>Register</span></a>
                <ul> <!-- Submenu -->
                    <li><a href="freein.php" title="">Freelancers</a></li>
                    <li><a href="recin.php" title="">Recruiters</a></li>
              </ul>
              <li><a title=""><span>Info</span></a>
                <ul> <!-- Submenu -->
                  <li><a href="freeinfo.php" title="">Freelancers</a></li>
                  <li><a href="recinfo.php" title="">Recruiters</a></li>
  		        </ul> <!-- End Submenu -->      
              </li>
              <li><a href="#" title="">Services</a></li>
              <li><a href="#" title="">Contact Us</a></li>                
            </ul>
          </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
          <div class="slider1 flexslider">  <!-- Slider -->
            <ul class="slides">
              <li>
    	    	    <img src="img/slider/1.jpg" alt="">
    	    		</li>
    	    		<li>
    	    	    <img src="img/slider/2.png" alt="">
    	    		</li>
    	    		<li>
    	    	    <img src="img/slider/3.jpg" alt="">
    	    		</li>
            </ul>
          </div>  <!-- Slider End -->
  </div> 
</header>
  <!-- Header End -->
  <!-- Content -->
  <div id="content">
    <div class="container">
       <div class="f-center">
              <h2>Why choose us ?</h2><br><br>
              <div class="head-info">
                EMPLOYERS: Do you have projects to carry out ? You want to Hire ?
            </div>  
            <br><br>
            <div class="head-info">
              FREELANCERS : You want to Work ? Are you looking for a Job ?
          </div><br><br>
       </div>
       <div class="f-hr"></div>
      <div class="row space40"></div>
      <div class="row">
        <div class="span12">
          <div class="row">
            <!-- Service Container --> 
            <div class="span6">
              <!-- Service Icon --> 
              <div class="ic-1"><i class="icon-lightbulb"></i></div>
              <!-- Service Title --> 
              <div class="title-1"><h3>I'm a Freelancer</h3></div>
              <!-- Service Content --> 
              <div class="text-1"><h4>If you are a Freelancer (self employed) and looking for work, please register here:</h4></div>
                    <br><br><div class="text-1"> 
                    Simple and Free registration<br><br>
                    Find Work, through Worldwide<br><br>
                    Choose Projects corresponding to your skills<br><br>
                    Home-working opportunities<br><br>
              </div>
            </div>
            <!-- Service Container End --> 
            <div class="span6">
              <div class="ic-1"><i class="icon-resize-small"></i></div>
              <div class="title-1"><h3>I'm an Employer</h3></div>
              <div class="text-1"><h4>If you are looking for a Freelancer to carry out your project, please register here:</h4></div>
                <br><br><div class="text-1"> 
                  Post your projects online for Free and Hire a Freelancer at very competitive costs<br><br>
                  Receive Freelancers' bids<br><br>
                  Hire according to your budget<br><br>
              </div>
            </div>
          </div><div class="f-hr"></div>   
        </div><br>
        <div class="span12">
          <h3>Major Freelancing skills required</h3>
        </div> 
        <div class="span8">        
          <img src="img/0.jpg" alt="">
        </div>
        <div class="span4">
          <div class="ic-1"></div>
          <div class="title-1"><h4>Freelancing skills:</h4></div>
          <div class="text-1"> 
            <ul class="list-b">
              <li><i class="icon-ok"></i> Business and Human resources.</li>
              <li><i class="icon-ok"></i> Sales and marketing.</li>
              <li><i class="icon-ok"></i> Writing and Translation.</li>
              <li><i class="icon-ok"></i> Mobile Phones and Computing.</li>
              <li><i class="icon-ok"></i> Design, Media and Architecture.</li>
              <li><i class="icon-ok"></i> Websites, IT and Architecture.</li>
            </ul>     
          </div>
        </div>
      </div><div class="f-hr"></div>
      <div class="space50"></div> 
      <h3><center>Freelancers from across the world at your fingertips!</center></h3>
      <div class="space50"></div> 
    </div>
  </div>

  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
        <h3>Contact Form</h3>
        <div>         
          <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post" action="freelancrindex.php">
            <div id="ajaxsuccess">E-mail was successfully sent.</div> 
            <div class="error" id="err-name">Please enter name</div>
            <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">
            
            <div class="error" id="err-email">Please enter e-mail</div>
		        <div class="error" id="err-emailvld">E-mail is not a valid format</div>
            <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

            <div class="error" id="err-message">Please enter message</div>
            <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>
            <div>
            	<div class="error" id="err-form">There was a problem validating the form please check!</div>
            	<div class="error" id="err-timedout">The connection to the server timed out!</div>
            	<div class="error" id="err-state"></div>
            </div>
            <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>
          </form>
        </div>
        </div>
        <div class="span3 offset3">
          <h3>Address</h3>
          Dept of IT<br>
          TCE , Madurai<br>
          India<br>
          <br>
          <i class="icon-phone"></i>+91 76396 32801<br>
          <i class="icon-envelope"></i><a href="mailto:yogithgt@gmail.com">yogithgt@gmail.com</a><br>
          <i class="icon-home"></i><a href="#">www.example.com</a>
          
          <div class="row space40"></div>  

          <a href="#" class="social-network sn2 behance"></a>
          <a href="#" class="social-network sn2 facebook"></a>
          <a href="#" class="social-network sn2 pinterest"></a>
          <a href="#" class="social-network sn2 xing"></a>      
        </div>
      </div>
      
      <div class="row space50"></div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
            Design by <a href="https://www.freshdesignweb.com">Yogith | Kumaresh | Viswa</a>
          </div>                       
        </div>
        <div class="span6 right">
          &copy; 2020. All rights reserved.
        </div>
      </div>

    </div>
  </footer>
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>
</body>
</html>
  