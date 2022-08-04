
<style>
  .para .name{
    font-weight: bolder;
    color: #0d6efd!important;
  }
  .para .address{
    font-size: 13px;
  }
  

</style>

    
<!-- footer starts from here -->
        <footer>
          <!-- footer our service section -->
          <div class="footer-sections" >
            <div class="container">
              <div class="row">
               <div class="col-md-4 d-flex ">
                <div class="footer-our-services">
                  <h2 style="font-size: 1.2rem;">Our Services</h2>
                  <div class="footer-our-services-body "style="text-transform:capitalize;">
                    <ul>
                    
                      <li><a href="services.php">Carpet stretching</a></li>
                      <li><a href="services.php"> Carpet cleaning</a></li>
                      <li><a href="services.php"> pet damage </a></li>
                      <li><a href="services.php"> Bleach Damage</a></li>
                    <li><a href="services.php"> Water damage</a></li>
                    <li><a href="services.php"> Seam repairs</a></li>
                    <li><a href="services.php"> Burn Damage Repair</a></li>
                    <li><a href="services.php"> Berber Carpet Repair</a></li>
                    
                  </ul>

                  
                  </div>
                  </div>
               </div>
                <!-- footer send message section -->
                  <div class="col-md-4 d-flex " style="z-index:1;">
                    <div class="footer-send-message">
                    <form class="send-message-form"  action="response1.php" method="POST">
                      <Label><h2 style="font-size: 1.2rem;">Send Message</h2></Label><br><br>
                      <div class="footer-send-message-body">
                        <input name="name" class="input" type="text" 
                        placeholder="Your name*"><br>
                      <input name="email" class="input" type="email" 
                      placeholder="Your email*"><br>
                      <!-- dont break string or else the string would break andgo to the 
                        next line.  -->
                      <textarea name="message" placeholder="your message here"
                      class="input" id="send-message-text-area" cols="22" 
                      rows="5" style="resize:none"></textarea><br>
                      <input class="btn btn-primary"   
                      value="Send Message" type="submit">
                      </div>
                      
                    </form>
                  </div>
                </div>
                
                <!-- footer contact us section -->
  
                  <div class="col-md-4 d-flex ">
                    <!-- i have created div inside col(d-flex) so that the element inside the div woldnot act as flex-items. -->
                    <div class="footer-contact-us">
                    <h2 style="font-size: 1.2rem;">Contact Us</h2>
                    <div class="footer-contact-us-body">
                      <i class="fa-solid fa-location-dot"> </i>
                    <p>Baltimore, MD, US</p><br>
                    <i class="fa-solid fa-envelope"></i>
                    <p>brianrosendo@gmail.com</p><br>
                    <i class="fa-solid fa-phone"></i>
                    <p>+1 443-769-0316
</p><br>
                    <i class="fa-solid fa-clock"></i>
                    <p>Opening Times:</p><br>
                    <p> Mon-Sun: 6:00-18:00</p><br>
    
                    </div>
                  </div>
                </div> 
                <!-- footer contact us section ends here -->




              </div>
                          <!-- footer copyright section starts from here -->


  
                <div class="row">
                  <div class="col-md-12 d-flex justify-content-center text-center">
                    <div class="footer-copyright">
                      
                      <br>
                      <div class="copyright-info" style= " color: rgb(233, 224, 224);">Copyright &copy; 2022, SOL carpet repair. All rights reserved.</div>
                      <div class="power" style="font-size:0.8rem;"><i>Powered by</i> <a style="display:inline-block; font-weight:bold; margin-top:10px;"href="www.pixeldesignnepal.com.np/">Pixel Design</a></div>
      
                      
                  </div>
                </div>
                  
                  
                
              </div>  
                
              </div>
            </div>
            
        
        </footer>
        
         
      </div>  
      </div>
      </div>
      



    <style>
    @media(max-width:900px){
        .footer-sections{
            padding:1rem;
        }
        .navbar-light .navbar-brand{
            margin:auto!important;
        }
        .box{
            width:100%;
        }
        .carousel{
            max-height: 14rem;
        }
        .btn-primary{
            margin-bottom:1rem;
        }
    }

      a[data-fancybox] img {
  cursor: zoom-in;
}

.fancybox__container {
  flex-direction: column-reverse;

  --fancybox-color: #0d0c22;
  --fancybox-bg: #fff;

  --fancybox-thumbs-width: 80px;
  --fancybox-thumbs-ratio: 4 / 3;

  --carousel-button-bg: #f3f3f4;
  --carousel-button-border-radius: 8px;

  --carousel-button-svg-width: 20px;
  --carousel-button-svg-height: 20px;

  --carousel-button-svg-stroke-width: 1.5;
  --carousel-button-svg-filter: none;
}

.carousel__button.is-close {
  top: 36px;
  right: 26px;
  z-index: 30;
}
body{
    overflow-x:hidden;
}
.carousel__button.is-close:hover {
  background: #e7e7e9;
}

.fancybox__slide {
  padding-top: 1.25rem;
}

/**
*  Thumbnails
*/

.fancybox__thumbs {
  padding: 0 100px 0 26px;
  border-bottom: 2px solid #f3f3f4;
}

/* Align thumbnails on right side if not draggable */
.fancybox__thumbs:not(.is-draggable) .carousel__track {
  justify-content: flex-end;
}

.carousel__slide.has-thumb {
  padding: 30px 7px;
}

.fancybox__thumb {
  border-radius: 4px;
  background-color: #e7e7e9;
}

.is-nav-selected .fancybox__thumb {
  box-shadow: 0 0 0 2px #fff, 0 0 0 4px #ea4c89;
}

.is-nav-selected .fancybox__thumb::after {
  display: none;
}
</style>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
     crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-
    IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-
    cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
     Fancybox.bind('[data-fancybox="gallery"]', {
  animated: false,
  showClass: false,
  hideClass: false,

  Toolbar: false,

  closeButton: "top",
  click: false,
  dragToClose: false,

  Carousel: {
    // Disable content slide animation
    friction: 0,

    // Disable touch guestures
    Panzoom: {
      touch: false,
    },

    Navigation: false,
  },

  Image: {
    // Disable animation from/to thumbnail on start/close
    zoom: false,

    // Disable zoom on scroll event
    wheel: false,

    // Disable zoom on image click
    click: false,

    // Fit image horizontally only
    fit: "contain",
  },

  // Center thumbnails only if draggable
  Thumbs: {
    minScreenHeight: 0,
    Carousel: {
      center: function () {
        return this.elemDimWidth > this.wrapDimWidth;
      },
    },
  },
});
    </script>
    
  </body>
</html>