<header id="header">
<div class="header-top">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-sm-6 top-slog">
                	<p><span><strong>Email Us: mailto:louismienie@refcoolelectrical.com.au </strong> <a href="mailto:louismienie@refcoolelectrical.com.au"></a></span></p>
                </div>
                <div class="col-md-4 col-sm-6">
                	<div class="row">
                    	<div class="col-md-6 col-sm-6 col-xs-6 top-social">
                        	<div class="social">
                					<a href=" https://www.linkedin.com/company/refcool-electrical-pty-ltd/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                          <a href="mailto:louismienie@refcoolelectrical.com.au"><i class="fa fa-envelope"></i> </a>
                    			</div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        	<div class="get-a-quote"><a href="#" data-toggle="modal" data-target="#myModal">Get A Quote</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="get-quote">
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Get a Quote</h4>
      </div>
      <div class="modal-body">
       
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
                                              <div class="ok">Thank You! Your Quote has been sent.</div>
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
                                              <div class="error">Sorry!	Your Quote could not be sent! Please try again.</div>
                                              <?php
                                                                        }
                                                                    ?>
                                              <?php
                                                                        }
                                                                ?>
                                </div>
                            </div>
                            
                            <div class="form-box">
                                <form action="response1.php" method="post" onsubmit="return formvalidation(this)">
                                	<div class="row sm-cont">
                                    	<div class="col-md-6 col-sm-6 col-xs-6">
                                        	<div id="c1"> 
                                    
                                                  <input id="name" name="name" type="text" placeholder="Your Name" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['name']?>" />
                                                  
                                                  <input id="email" name="email" type="text" placeholder="Your Email" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['email']?>"/>  
                                                 
                                                  <input id="phone" name="phone" type="text" placeholder="Phone" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['phone']?>" />
                                                 
                                                  
                                                
                                                 
                                                  </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                        	<div id="c2">
                                            
                                                  <input id="mobile" name="mobile" type="text" placeholder="Mobile" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['mobile']?>" />
                                          
                                                  <input id="location" name="location" type="text" placeholder="Location" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['loaction']?>" />
                                           
                                                  <select class="sel" id="services" name="services">
              <option>Services</option>
                            <option>Building Inspection</option>
                            <option>Pest Inspection</option>
                            <option>Pre Sale Inspection</option>
                            <option>Methamphetamine Test</option>
                          </select>
                                
                                                      
                                                      
                                                     
                                                      </div>
                                        </div>
                                    </div>
                                    
                                    <div id="c2" class="brk">
                                                      <textarea name="comments" placeholder="Your Message" cols="20" rows="15" class="border" id="comments" style="height:120px" onfocus="this.className='border1';" onblur="this.className='border';"><?php echo $_SESSION['comments'] ?></textarea>
                                     <label> Enter code*:</label>
                                                  <input name="code_check" type="text" class="border enter-code"  onfocus="this.className='border1';" onblur="this.className='border';" style="width:120px" />
                                                  
                                                  <img src="verimages/image-verify.php" alt="verify" /><br />
                                                 
                                                  <input name="Submit2" type="submit" value="Submit" onmouseover="this.className='button1'" class="button" onmouseout="this.className='button'"/>
                                                  
                                                  </div>
                                    </form>
                                    </div>
      </div>
      
    </div>
  </div>
</div>
</div>
        </div>
    </div>

    <style>
      .header{
        position:relative;
      }
    </style>

	<div class="header">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                <style>
                  .logo img{
                    width: 283px;
                    height: 78px;
    padding: 10px 0px;

                  }


                  @media screen and (max-width:576px){
                    .small-banner img{
                      height:300px !important;
                    }
                  }

                  .logo img{
                    width: 150px !important;
                    height: 85px !important;
                    padding: 10px 0px;
                  }

                 

                </style>
                	<div class="logo">
                    	<a href="index.php"><img src="images/logo2.png"  alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6 header-rgt">
                	<div class="row">
                    	<div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 clearfix top-phone">
                        	<span><i class="fa fa-phone" aria-hidden="true"></i><strong>Call Us</strong><br /> <a href="tel: 0400 269 377">0400 269 377</a></span>
                        </div>

                        <style>
                          .top-email, .top-phone{
                            margin-top:20px !important;
                          }

                        </style>
                        <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 top-email clearfix text-start">
                        	<!--<span><i class="fa fa-envelope-o" aria-hidden="true"></i><strong>Email Us</strong><br /> <a href="mailto:admin@townandcountrybuilding.com.au">admin@townandcountrybuilding.com.au</a></span>-->
                            <!--<img style="float:left" class="img-responsive" src="images/australian-owned.png" alt="" />-->
                            <span><i class="fa fa-phone" aria-hidden="true"></i><strong>Inbox Us</strong><br /> <a href="mailto:louismienie@refcoolelectrical.com.au"> louismienie@refcoolelectrical.com.au</a></span>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="trueHeader">
    <div class="nav-sec">
    <div class="container">
            	<div class="row">
                	<div class="col-md-8">
                    	<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>     
         <span class="navbar-brand">Navigation</span>  
    </div>

    
    <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav">
        <li class="nav-home"><a href="index.php">Home</a></li>
        <li class="nav-about"><a href="about.php">About Us</a></li> 
        <li class="nav-services"><a href="services.php">Services</a></li>
        <li class="nav-gallery"><a href="gallery.php">Gallery</a></li>
        <li class="nav-contact"><a href="contact.php">Contact Us</a></li>
       
      </ul>
    </div>
</nav>
                    </div>
                    <div class="col-md-4 abn">
                    	<p>ABN 20155674150<br /> <span></span></p>
                    </div>
                </div>
                	
            
</div>
</div>
</div>
</header>