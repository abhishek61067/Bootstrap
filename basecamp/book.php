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
  <body>
    <?php include('includes/headerpart.php') ?>
    <div class="sub-banner">
     <div class="text-center">
       <h2>Book Now</h2>
     </div>
   </div>

   <div class="booking">
    <div class="container">
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
                                              <div class="ok">Thank You! Your Booking has been sent.</div>
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
                                              <div class="error">Sorry! Your Booking could not be sent! Please try again.</div>
                                              <?php
                                                                        }
                                                                    ?>
                                              <?php
                                                                        }
                                                                ?>
                                </div>
                            </div>
    <form action="responses.php" method="post" onsubmit="return formvalidation(this)">
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

<div class="col-md-12 col-sm-12 col-xs-12">
<h2>1. House cleanning:</h2>
</div>

<div class="col-md-4 col-sm-6 col-xs-6">
 <div id="c1"> 
  <label>No. of bedroom<span>*</span></label>
  <input id="bedroom" name="bedroom" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['bedroom']?>" />
</div>
</div> 

<div class="col-md-4 col-sm-6 col-xs-6">
 <div id="c1"> 
  <label>No. of Bathroom<span>*</span></label>
  <input id="bathroom" name="bathroom" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['bathroom']?>" />
</div>
</div>  

<div class="col-md-4 col-sm-6 col-xs-6">
 <div id="c1"> 
  <label>Schedule of Cleaning</label>
  <select name="housecleaning" id="housecleaning" class="sel">
    <option selected="selected">Once of clean</option>
    <option>Weekly service</option>
    <option>Fort night</option>
    <option>Monthly</option>
  </select>
</div>
</div>



<div class="col-md-4 col-sm-6 col-xs-6">
 <div id="c1"> 
            <label>Extra cleaning service *</label>
              
<div class="row">

  <div class="col-md-6 col-sm-6">
    <input id="choose" type="checkbox" name="choose[]" value="All">All<br>
<input id="choose1" type="checkbox" name="choose[]" value="laundry">Laundry<br>
<input id="choose2" type="checkbox" name="choose[]" value="ironing">Ironing<br>
<input id="choose3" type="checkbox" name="choose[]" value="window Cleaning">Window Cleaning<br>
  </div>
  <div class="col-md-6 col-sm-6">
    <input id="choose5" type="checkbox" name="choose[]" value="Balcony Clean">Balcony Clean<br>
<input id="choose7" type="checkbox" name="choose[]" value="lease clean">lease clean<br>
<input id="choose8" type="checkbox" name="choose[]" value="custom house">custom house<br>
<input type="checkbox" id="other" name="choose[]" value="other">
     Other
      <input type="text" id="otherValue" name="other"><br>
  </div>




</div>
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<h2>2. Office cleanning:</h2>
</div>

<div class="col-md-4 col-sm-6 col-xs-6">
 <div id="c1"> 
  <label>Area of Bathroom<span>*</span></label>
  <input id="bathroom1" name="bathroom1" type="text" placeholder="" class="border" onfocus="this.className='border1';" onblur="this.className='border';" value="<?php echo $_SESSION['bathroom1']?>" />
</div>
</div>  

<div class="col-md-4 col-sm-6 col-xs-6">
 <div id="c1"> 
  
  <label>Kitchen</label>
<br>
   <input type="radio" name="ask" value="yes"> Yes &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="ask" value="no"> No<br>

  <br>
</div>
</div>  


<div class="col-md-12 col-sm-12 col-xs-12">
  <div id="c1" class="brk">
    <label>Your Message <span>*</span></label>
    <textarea name="comments" placeholder="" cols="20" rows="15" class="border" id="comments" style="height:150px" onfocus="this.className='border1';" onblur="this.className='border';"><?php echo $_SESSION['comments'] ?></textarea>
    <label> Enter code <span>*</span>:</label>
    <input name="code_check" type="text" class="border enter-code"  onfocus="this.className='border1';" onblur="this.className='border';" style="width:120px" />

    <img src="verimages/image-verify.php" alt="verify" /><br />

    <input name="Submit2" type="submit" value="Submit" onmouseover="this.className='button1'" class="button" onmouseout="this.className='button'"/>
  </div>
</div> 
</div>
</form>
</div> 
</div> 
<br><br>



<?php include('includes/footerpart.php') ?>


<script>
  var otherCheckbox = document.querySelector('input[value="other"]');
var otherText = document.querySelector('input[id="otherValue"]');
otherText.style.visibility = 'hidden';

otherCheckbox.onchange = function() {
  if(otherCheckbox.checked) {
    otherText.style.visibility = 'visible';
    otherText.value = '';
  } else {
    otherText.style.visibility = 'hidden';
  }
};
</script>

</body>
</html>