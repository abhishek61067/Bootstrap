<div class="footer">
   <div class="container">
       <div class="row gx-5">
           <div class="col-lg-3 col-md-4 col-sm-12 fot-abt">
               <h4>who we are</h4>
               <p>Having worked on a number of residential and commercial cleaning projects, we have the experience to help you maintain your house or workplace cleanliness.</p>
               <div class="footer-social">
        <a href="https://www.facebook.com/Basecamp-Cleaning-Services-106755114703954/?ref=page_internal" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="mailto: kirangautam904@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    
       </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
               <h4>Quick Link</h4>
               <div class="row">
                   <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:0px !important;">
                       <ul style="margin-top:16px !important">
                         <li><a href="index.php">Home</a></li>
                         <li><a href="about.php">About</a></li>
                         <li><a href="services.php">Services</a></li>
                     </ul>
                 </div>
                 <div class="col-md-6 col-12-6 col-xs-12">
                   <ul style="margin-top:16px !important">
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 footer-services-box">
      <h4>Services</h4>
      <style>
        .footer-services{
          text-transform: capitalize;
        }

        .footer-social .fa{font-size:14px;padding:10px 11px;color:#008EC4; background:white !important; margin-right:5px; width:32px;}

        .footer h5 .fa {
    margin-right: 10px;
    color: #008EC4 ;
    font-size: 18px;
}

.scroll-top-wrapper{
  background:#008EC4;
}

.footer-btm-rgt a {
  color: #008EC4 !important;
}
  .footer-services li{
    padding-bottom:10px;
  }

  .footer-services-box ul{
  display:inline-block;
  }

  .footer-services-box ul.second-ul{
    position: relative;
    margin-top: 0px;
    bottom: 80px;
    margin-left:10px;
  }

  .get-a-quote .form-box .button1 {
  background-color:#008EC4 !important;
}


      </style>
      <div class="row footer-services">
          <ul>
            <li>Domestic cleaning</li>
            <li>commercial cleaning</li>
            <li>strata cleaning</li>
            <li>office cleaning</li>
            <br>
            <br>
            </ul>

            <ul class="second-ul">
              <li>after party cleaning</li>
            <li>carpet steam cleaning</li>
            <li>construction cleaning</li>
            </ul>
          
      </div>
   </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
       <h4>Contact Information</h4>
       <br>
       <h5><i class="fa fa-home" aria-hidden="true"></i> <a target="_blank" href=""> 18 cnnor crescent florey 2615</a></h5>
       <h5><i class="fa fa-phone-square" aria-hidden="true"></i> <a href="tel:+61 0481 154 528">+61 0481 154 528</a> </h5>
       <h5><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:kirangautam904@gmail.com">kirangautam904@gmail.com</a></h5>
   </div>
   
</div>
</div>
</div>

<div class="footer-bottom">
   <div class="container">
       <div class="row">
           <div class="col-dm-6 col-sm-6 col-xs-6">
               <p>© Copyright 2022. Basecamp Cleaning Services. All rights reserved.</p>
           </div>
           <div class="col-dm-6 col-sm-6 col-xs-6 footer-btm-rgt">
               <p>Designed By : <a href="http://www.pixeldesignau.com" target="_blank">Pixel Design</a></p>
           </div>
       </div>
   </div>
</div>

<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </span>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="dist/simple-lightbox.js"></script>
<script>
  $(function(){
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function(){
      console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
      console.log('Shown');
    })
    .on('close.simplelightbox', function(){
      console.log('Requested for closing');
    })
    .on('closed.simplelightbox', function(){
      console.log('Closed');
    })
    .on('change.simplelightbox', function(){
      console.log('Requested for change');
    })
    .on('next.simplelightbox', function(){
      console.log('Requested for next');
    })
    .on('prev.simplelightbox', function(){
      console.log('Requested for prev');
    })
    .on('nextImageLoaded.simplelightbox', function(){
      console.log('Next image loaded');
    })
    .on('prevImageLoaded.simplelightbox', function(){
      console.log('Prev image loaded');
    })
    .on('changed.simplelightbox', function(){
      console.log('Image changed');
    })
    .on('nextDone.simplelightbox', function(){
      console.log('Image changed to next');
    })
    .on('prevDone.simplelightbox', function(){
      console.log('Image changed to prev');
    })
    .on('error.simplelightbox', function(e){
      console.log('No image found, go to the next/prev');
      console.log(e);
    });
  });
</script>
<script>
 
$(function(){
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
    $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>