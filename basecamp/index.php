<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>basecamp cleaning services</title>
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
  <body id="home">
  <?php include('includes/headerpart.php') ?>
      
        
        <div class="banner">

        <style>
          @media(min-width: 1200px){
            .carousel-inner > .item > img{
              max-height: 100vh;
              width: 100%;
              object-fit: cover;
            }
          }
          .why-us .container{
            margin-bottom:50px;
          }

          h1 span{
            color:#008EC4 !important;
          }
          .button:hover, .button1:hover{
            color:#008EC4 !important;
            background:white !important
          }

          .button, .button1{
            border:none;
          }

          .button:hover{
            border: 1px solid #008EC4 !important;
            color:#008EC4 !important;
            background:white !important;
          }
          .button1:hover{
            border: 1px solid #008EC4 !important;
            color:#008EC4 !important;
            background:white !important
          }
          
          input[name="Submit2"]{
            border:none !important;
            background:#008EC4cc !important;
            color:white !important;

            
          } 
          input[name="Submit2"]:hover{
            border:none !important;
            background:#008EC4ff !important;
            color:white !important;

            
          } 

        </style>





<div class="home_quote get-a-quote">
         

        <div class="form-box">
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
          <form action="response1.php" method="post" onsubmit="return formvalidation(this)">
           <div class="row sm-cont">
             <div class="col-md-4 col-sm-6 col-xs-6">
               <div id="c1"> 
                <label>Your Name <span>*</span></label>
                <input id="name" name="name" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['name']?>" />
              </div>
            </div>

             <div class="col-md-4 col-sm-6 col-xs-6">
               <div id="c1"> 
                <label>Your Email <span>*</span></label>
                <input id="email" name="email" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['email']?>"/>  

               
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
             <div id="c1">
              <label>Phone <span>*</span></label>
 <input id="phone" name="phone" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['phone']?>" />
</div>
</div>


 <div class="col-md-4 col-sm-6 col-xs-6">
               <div id="c1"> 

 <label>Mobile <span>*</span></label>
              <input id="mobile" name="mobile" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['mobile']?>" />

             

            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-6">
             <div id="c1">

              <label>Location <span>*</span></label>
 <input id="location" name="location" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['loaction']?>" />

</div>
</div>

 <div class="col-md-4 col-sm-6 col-xs-6">
               <div id="c1"> 
<label>Service you want <span>*</span></label>
              <input id="services" name="services" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['services']?>" />
             </div>
          </div>  

          <div class="col-md-12 col-sm-12 col-xs-12">
        <div id="c1" class="brk">

          <label>Your Message <span>*</span></label>
          <textarea name="comments" placeholder="" cols="20" rows="15" class="border" id="comments" style="height:70px" onfocus="this.className='border1';" onblur="this.className='border';"><?php echo $_SESSION['comments'] ?></textarea>
      

          <input name="Submit2" type="submit" value="Submit" class="button" onmouseout="this.className='button'"/>
        </div>
        </div> 
        </div>
      </form>




  </div>   

    <div class="bottom-head">
        <p><i class="fa fa-check" aria-hidden="true"></i>100% Guarantee</p>
        <p><i class="fa fa-check" aria-hidden="true"></i>Bonded and Insured Cleaners</p>
        <p><i class="fa fa-check" aria-hidden="true"></i>5 Star Rated Service</p>
      </div>

</div>

    	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider1/02.jpg" alt="banner" />
     <!--  <div class="carousel-caption">
      		<h2>We know how to deal with your dirt.</h2>
            <p>Are you fed up with the stubborn dirt or stain that isn't going away? We have the tools and techniques to remove any stubborn stains and grease whether it's from carpets or furnitures. </p>
            <a class="readmore" href="tel:12136246700">read more</a>
        </div> -->
    </div>
    <div class="item">
      <img src="images/slider1/01.jpg" alt="banner" />
     <!--  <div class="carousel-caption">
          <h2>Make your Garden Beautiful to see</h2>
            <p>An inviting garden is what all homeowners want but without regular care and maintenance it is not easy to keep it to its best. Let our professionals take care of your garden.</p>
            <a class="readmore" href="about.php">read more</a>
        </div> -->
    </div>
  </div>
</div>
</div>

<div class="welcome text-center">
	<div class="container">
    	<h1>welcome to <span>basecamp cleaning services</span></h1>
      <p>Basecamp Cleaning Solutions operates in canberra and provides a variety of cleaning services. Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Minus, natus quas labore, similique odio a praesentium distinctio recusandae ab sapiente ex quam sint voluptas veritatis perspiciatis sed aut, enim illum? Culpa, cupiditate. Non rerum expedita eligendi totam alias, adipisci? Fuga.<p>
<a class="readmore" href="about.php">read more</a>
    </div>
</div>

<div class="services" style="background: url(images/services/background.jpg);">
  <div class="container">
    <h2>Our <span>Services</span></h2>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="images/services/01.jpg" class="img-fluid" alt="Domestic Cleaning"  height="200px" width="100%">
          <h3>Domestic Cleaning</h3>
          <p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Labore praesentium veritatis quis, reprehenderit laborum, quos enim. Eveniet amet quod velit eius laudantium quidem, atque voluptas cumque aliquid natus, veritatis obcaecati!</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="images/services/02.jpg" alt="Commercial/ Office Cleaning"  height="200px" width="100%">
          <h3>Commercial cleaning</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, exercitationem, alias? Nisi eaque provident iure debitis itaque quisquam adipisci quos ea iusto. Reiciendis modi impedit, quisquam animi, assumenda ex repellat?</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="images/services/03.jpg"  alt="Carpet Cleaning"  height="200px" width="100%">
          <h3>Strata Cleaning</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos perferendis dolores illum modi odit, harum, ducimus, velit a deleniti nulla temporibus iusto quod voluptas similique, quia inventore quas natus necessitatibus?</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="images/services/04.jpg"  alt="Window Cleaning"  height="200px" width="100%">
          <h3>office Cleaning</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aut ipsa, reiciendis magni, at necessitatibus iste soluta vel quibusdam ea sint veritatis nam. Minus alias eaque recusandae voluptates laborum, illo.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="images/services/05.jpg"  alt="End of lease cleaning"  height="200px" width="100%">
          <h3>After party cleaning</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aperiam eius delectus eligendi, excepturi cumque sapiente commodi dolores soluta illum dolorem odio quam doloribus rerum alias explicabo. Ducimus, ullam corporis!</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="images/services/06.jpg" alt="Gardening Services" height="200px" width="100%">
          <h3>Carpet steam cleaning</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quas, iste. Sed commodi quod consequuntur tempora excepturi aliquam, voluptas quo esse eligendi illo delectus animi iste nisi magni ipsa ea.</p>
        </div>
        
    </div> 
  </div>
</div>
<style>
    .services img{
        height:24rem;
        object-fit:cover
    }
</style>

<div class="gallery-home text-center">
  <div class="container">
    <h2>Our<span> Gallery</span></h2>
    <div class="row">    
      <div class="gallery-sec">
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="gallery-main text-center">
            <div class="gallery">
              <div class="gallery-image">
                <img src="images/gallery/1.jpg" alt="gardening" class="img-responsive">
                <a href="images/gallery/1.jpg" title="" data-lightbox-gallery="gallery1" class="nivo">
                  <div class="cap-option">
                    <i class="fa fa-search-plus"></i>
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="gallery-main text-center">
            <div class="gallery">
              <div class="gallery-image">
                <img src="images/gallery/2.jpg" alt="gardening" class="img-responsive">
                <a href="images/gallery/2.jpg" title="" data-lightbox-gallery="gallery1" class="nivo">
                  <div class="cap-option">
                    <i class="fa fa-search-plus"></i>
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="gallery-main text-center">
            <div class="gallery">
              <div class="gallery-image">
                <img src="images/gallery/3.jpg" alt="gardening" class="img-responsive">
                <a href="images/gallery/3.jpg" title="" data-lightbox-gallery="gallery1" class="nivo">
                  <div class="cap-option">
                    <i class="fa fa-search-plus"></i>
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="gallery-main text-center">
            <div class="gallery">
              <div class="gallery-image">
                <img src="images/gallery/4.jpg" alt="cleaning services" class="img-responsive">
                <a href="images/gallery/4.jpg" title="" data-lightbox-gallery="gallery1" class="nivo">
                  <div class="cap-option">
                    <i class="fa fa-search-plus"></i>
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="gallery-main text-center">
            <div class="gallery">
              <div class="gallery-image">
                <img src="images/gallery/5.jpg" alt="cleaning services" class="img-responsive">
                <a href="images/gallery/5.jpg" title="" data-lightbox-gallery="gallery1" class="nivo">
                  <div class="cap-option">
                    <i class="fa fa-search-plus"></i>
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="gallery-main text-center">
            <div class="gallery">
              <div class="gallery-image">
                <img src="images/gallery/6.jpg" alt="cleaning services" class="img-responsive">
                <a href="images/gallery/6.jpg" title="" data-lightbox-gallery="gallery1" class="nivo">
                  <div class="cap-option">
                    <i class="fa fa-search-plus"></i>
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="images/cleaning.png" class="img-responsive" alt="cleaning">
      </div>
      <div class="col-md-8">
        <h2>why <span>basecamp cleaning services</span></h2>
        <p>Our cleaners are insured and highly trained so no need to worry about your home, office or garden. We carry out each job with personal care and diligence ensuring your space looks great. </p>

<p>Our cleaning services is guaranteed to leave your place sparkling clean and fresh. We are concerned about your and your home so we use chemical free cleaning products. With the right tools, our cleaners easily get the work done. We clean it all from stains to grease. 

</p>
<a class="readmore" href="about.php">read more</a>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footerpart.php') ?>

  </body>
</html>