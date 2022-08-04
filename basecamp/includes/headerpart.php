<?php error_reporting(0);?>
<header id="header">
  	<div class="header-top">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6 col-xs-7">
                	<p><i class="fa fa-globe"></i><span style="display:inline-block !important;margin-left:10px !important;">18 cnnor crescent florey 2615</span></p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-5">
                	<div class="social">
                	<a href="https://www.facebook.com/Basecamp-Cleaning-Services-106755114703954/?ref=page_internal" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                	<a href=" https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmznLKrtJClsbKRPPszrHvRxkPvCnwLQRlmVxLqrTvHpLtvpGVxFFpcZXMPMnVRjckrqSL" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <style>
     .fa{
      font-size:2.5rem;
     }

     .fa-globe{
      font-size:1.7rem;
     }

     .top-phone h4, .top-email h4{
      margin-top:35px !important;
     }

     .top-phone a, .top-email a{
      margin-top:15px !important;
     }

     .top-mid h4{ margin-top:35px; font-size:16px; color:#008EC4 !important;}

      .top-mid{
        background:white;
       }

       .nav-bg, .header-top{
        background: #130C6A;
       }

       .header-top i{
    color: white;
    }

    .navbar a{
      color:white !important;
    }

    .navbar a:hover{
      color:#130C6A!important;
    }

    .navbar-right a{
      background:#008EC4;
      border:1px solid black;
      border-radius: 0px;
    }

   .top-mid a{
      display:inline-block;
      color:black !important;
      margin-top:10px !important;
    }

    .top-mid a:hover{
      color: #008EC4 !important;
      background:white !important;
      }

    .logo img{
      margin:0 !important;
    }

    .navbar-right .navbar-nav > li > a:hover {
      color: black !important;
      background: white !important;
    }
    .button,
.button1{background:#008EC4!important;border:1px solid #83dc36;font-size:12px;font-weight:bold;padding:8px 10px;margin-right:8px;cursor:pointer;color:#fff;}


.button1:hover{background:white!important;border:1px solid #83dc36;font-size:12px;font-weight:bold;padding:8px 10px;margin-right:8px;cursor:pointer;color:#008EC4;}

.navbar-right{
  position:absolute;
  right:0px;
}

.navbar-right li a:hover{
color:#008EC4 !important;
border:1px solid #008EC4 !important;
}

    </style>
    <div class="top-mid">
    	<div class="container">
    	<div class="row">
        	<div class="col-md-5 col-sm-4 col-xs-6">
            	<div class="logo">
                	<a href="index.php"><img src="./images/logo1.png" alt="Basecamp cleaning solutions" height="100px" /></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-8 col-xs-6">
            	<div class="row">

                    <div class="col-md-4">
                    </div>
                    
                	<div class="col-md-3 col-sm-5">
                    	<div class="top-phone">
                    	<h4> <i class="fa fa-phone"></i> Call Us On<br /> <small><a href="tel:+61 0481 154 528 ">+61 0481 154 528 </a></small></h4>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-7 top-email">
                    	<h4><i class="fa fa-envelope"></i> Mail Us<br /> <small><a href="mailto:kirangautam904@gmail.com"> kirangautam904@gmail.com</a></small></h4>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </div>
    
  
    <div class="nav-bg">
       	<div class="container text-center">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" data-toggle="modal" data-target="#myModal">Get a Quote</a>   
                </div>

               
                <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1">
                  
                  <ul class="nav navbar-nav navbar-left">
                    <li class="nav-home"><a href="index.php">Home</a></li>
                    <li class="nav-about"><a href="">About Us</a></li> 
                    <li class="nav-services"><a href="">Services</a></li>
                    <li class="nav-gallery"><a href="">Gallery</a></li>
                    <li class="nav-contact"><a href="">Contact Us</a></li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="quote"><a href="#" class="quote" data-toggle="modal" data-target="#myModal">Get a Quote</a></li>
                    <li class="quote book"><a href="book.php" class="quote">Book Now</a></li>
                  </ul>
                  
                </div>
            </nav>
        </div>
	</div>
</header>

<div class="get-a-quote">
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
                <div class="error">Sorry! Your Quote could not be sent! Please try again.</div>
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
             <div class="col-md-4 col-sm-6 col-xs-6">
               <div id="c1"> 
                <label>Your Name <span>*</span></label>
                <input id="name" name="name" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['name']?>" />
                <label>Your Email <span>*</span></label>
                <input id="email" name="email" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['email']?>"/>  

               
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
             <div id="c1">
              <label>Phone <span>*</span></label>
 <input id="phone" name="phone" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['phone']?>" />

 <label>Mobile <span>*</span></label>
              <input id="mobile" name="mobile" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['mobile']?>" />

             

            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-6">
             <div id="c1">

              <label>Location <span>*</span></label>
 <input id="location" name="location" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['loaction']?>" />


<label>Service you want <span>*</span></label>
              <input id="services" name="services" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['services']?>" />
             </div>
          </div>  

          <div class="col-md-12 col-sm-12 col-xs-12">
        <div id="c1" class="brk">

          <label>Your Message <span>*</span></label>
          <textarea name="comments" placeholder="" cols="20" rows="15" class="border" id="comments" style="height:120px" onfocus="this.className='border1';" onblur="this.className='border';"><?php echo $_SESSION['comments'] ?></textarea>
          <label> Enter code <span>*</span>:</label>
          <input name="code_check" type="text" class="border enter-code"  onfocus="this.className='border1';" onblur="this.className='border';" style="width:120px" />

          <img src="verimages/image-verify.php" alt="verify" /><br />

          <input name="Submit2" type="submit" value="Submit" onmouseover="this.className='button1'" class="button" onmouseout="this.className='button'"/>
        </div>
        </div> 
        </div>
      </form>


    </div>

  </div>     <div class="bottom-head">
        <p><i class="fa fa-check" aria-hidden="true"></i>100% Guarantee</p>
        <p><i class="fa fa-check" aria-hidden="true"></i>Bonded and Insured Cleaners</p>
        <p><i class="fa fa-check" aria-hidden="true"></i>5 Star Rated Service</p>
      </div>
</div>
</div>
</div>
</div>