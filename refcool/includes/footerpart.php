<div class="footer-top">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4 col-sm-6 col-xs-6">
                    	<h6><img src="images/left-border-title.png" alt="" /> <!--<small>Contact</small><br />--> Contact Information</h6>
                        <div class="info-blk clearfix">
                	<img src="images/mobile-icon2.png" alt="" />
                	<h5>Phone Number:<br /> <strong><a href="tel: 0400 269 377">0400 269 377</a></strong></h5>
                </div>
                <div class="info-blk clearfix">
                	<img src="images/email-icon.png" alt="" />
                    <h5>E-mail Address:<br /> <strong><a href="mailto: louismienie@refcoolelectrical.com.au">louismienie@refcoolelectrical.com.au</a></strong></h5>
                </div>
                <div class="info-blk clearfix">
                	<img src="images/map-icon2.png" alt="" />
                    <h5>Visit Us:<br /> <strong> WILLUNGA, SOUTH SA, 5172</strong></h5>
                </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                    	<h6><img src="images/left-border-title.png" alt="" /> <!--<small>Service</small><br />--> Our services</h6>
                        <div class="cato clearfix">
                        	<ul>
                            	<li><a href="services.php">Pre-Purchase Inspections</a></li>
								<li><a href="services.php">Termite and Pest Inspections
                                </a></li>
                                <li><a href="services.php">New Construction
                                </a></li>
                                <li><a href="services.php">Asbestos Inspections
                                </a></li>
                                <li><a href="services.php">Industrial and Commercial Building Inspections
                                </a></li>
                                <li><a href="services.php">Pool Compliance Statements
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                    	<h6><img src="images/left-border-title.png" alt="" /> <!--<small>Links</small><br />--> Quick links</h6>
                        <div class="quick-link">
                        <div class="cato clearfix">
                        	<ul>
                            	<li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                        </div>
                        
                        <!-- <div class="opening">
                        	<p><img src="images/clock.png" alt="" /> Opening Hours<br /> 
<strong>Mon - Fri : 8:00 AM - 5:00 PM</strong></p>
							
                        </div> -->
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                    	<h6><img src="images/left-border-title.png" alt="" /> <!--<small>Social</small><br />--> Social Contact</h6>
                        <div class="footer-social">
                	<h5><a href=" https://www.linkedin.com/company/refcool-electrical-pty-ltd/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></h5> 
                	<h5><a href="mailto:louismienie@refcoolelectrical.com.au"><i class="fa fa-envelope" aria-hidden="true"></i>Gmail</a></h5>
                	</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6 col-sm-6 col-xs-6">
                    	<p>Copyright © Refcool Services 2022 | All rights reserved.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    	<p>Design by: <a href="http://www.pixeldesignau.com" target="_blank">Pixel Design</a></p>
                    </div>
                </div>
            </div>
        </div>
        
    <a href="#" class="scrollToTop scrol"><img src="images/iconn.png" alt="Up-icon"></a>
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
      	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
      </script>
      <script>
$(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});
</script>
<!--testimonial-->
<script>
run = false;
var single = function() {
$('#mycarousel3 .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
         next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    run = true;
});
};
var undo = function() {
$('#mycarousel3 .item').each(function () {
    $(this).children().last().remove();
    run = false;
});
};
if ($(window).width() > 768) {
    multiple();
};
$(window).resize(function() {
    if (run==false && $(window).width() > 768) {
    multiple();
} else if (run == true && $(window).width() < 768) {
    undo();
}
});
</script> 

<script type="text/javascript" src="js/core.js"></script>