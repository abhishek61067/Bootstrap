<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basecamp cleaning services</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href='dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> 
    <link href="favicon1.ico" rel="shortcut icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    input.button10{
        border:none !important;
        padding:1rem 1.5rem;
        background:#008EC4 !important;
        color:white !important;
        box-sizing:border-box;
        
    }

    input.button10:hover{
        border:1px solid #008EC4 !important;
        color: #008EC4 !important;
        background:none !important;
        box-sizing:border-box;
        padding:0.9rem 1.4rem;
    }
  </style>
  <body id="contact">
  <?php include('includes/headerpart.php') ?>
  	<div class="sub-banner">
			<div class="text-center">
        	<h2>Contact Us</h2>
            </div>
        </div>
        
        <div class="sub-content contact">
  	<div class="container">
  		<div class="row">
        	<div class="col-md-7 col-sm-12">
            	<p class="lead">If you have some feedback please fill the form</p>
                <div class="row thank-message">
                                <div class="col-md-12">
                                   <?php
                                                                if(isset($_GET['sent']))
                                                                {
                                                                    $sent = $_GET['sent'];
                                                                ?>
                                              <?php if($sent==1) 
                                                                                        {			
                                                                ?>
                                              <br />
                                              <div class="ok">Thank You! Your comments has been sent.</div>
                                              <?php
                                                                    }else if($sent==2){
                                                                ?>
                                              <br />
                                              <div class="error">Code characters do not match! Please try again.</div>
                                              <?php
                                                                                        
                                                                    }else
                                                                    {
                                                                ?>
                                              <br />
                                              <div class="error">Sorry!	Your comments could not be sent! Please try again.</div>
                                              <?php
                                                                        }
                                                                    ?>
                                              <?php
                                                                        }
                                                                ?>
                                </div>
                            </div>
                            
                            <div class="form-box">
                                <form action="response.php" method="post" onsubmit="return formvalidation(this)">
                                	<div class="row sm-cont">
                                    	<div class="col-md-6 col-sm-6 col-xs-6">
                                        	<div id="c1"> 
                                    <label>First Name*:</label>
                                                  <input id="firstname" name="firstname" type="text" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['firstname']?>" />
                                                  <label>Last Name*:</label>
                                                  <input id="lastname" name="lastname" type="text" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['lastname']?>" />
                                                  <label>Address:</label>
                                                  <input id="address" name="address" type="text" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['address']?>" />
                                                  
                                                 <label> Phone:</label>
                                                  <input id="phone" name="phone" type="text" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['phone']?>" />
                                                 <label> E-mail*:</label>
                                                  <input id="email" name="email" type="text" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['email']?>"/>
                                                  
                                                
                                                 
                                                  </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                        	<div id="c2">
                                <label>Comments*:</label>
                                                      <textarea name="comments" cols="20" rows="15" class="border" id="comments" style="height:185px" onfocus="this.className='border1';" onblur="this.className='border';"><?php echo $_SESSION['comments'] ?></textarea>
                                                      
                                                      
                                                      <label> Enter code*:</label><br />
                                                  <input name="code_check" type="text" class="border"  onfocus="this.className='border1';" onblur="this.className='border';" style="width:120px" />
                                                  
                                                  <img src="verimages/image-verify.php" alt="verify" /><br />
                                                 <label> *mandatory.</label><br />
                                                  <input name="Submit2" type="submit" value="SUBMIT" class="button10" />
                                                  <input name="reset2" type="reset" value="RESET"class="button10" />
                                                      </div>
                                        </div>
                                    </div>
                                    </form>
                                    </div>
            </div>
            <div class="col-md-5 col-sm-12">
            	<div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26037.01528507175!2d149.04002961887326!3d-35.34008514067685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b17b46607c66649%3A0x500ea6ea7695b50!2sLyons%20ACT%202606%2C%20Australia!5e0!3m2!1sen!2snp!4v1655267234608!5m2!1sen!2snp" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
        </div>
     </div>
  </div>

<?php include('includes/footerpart.php') ?>

  </body>
</html>