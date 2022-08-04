<?php include "header_sec.php"; ?>

    <!-- breadcrumb starts here -->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197642.23823341276!2d-76.76058412165916!3d39.28462247041538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c803aed6f483b7%3A0x44896a84223e758!2sBaltimore%2C%20MD%2C%20USA!5e0!3m2!1sen!2snp!4v1652075699887!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  <!-- breadcrumb ends here -->

<!-- contact starts from here -->
<div class="contact" style="padding-top:5rem">
  <div class="container">
    <!-- if you want margin between the rows, use margin or padding in the row class and gutter in row to make a padding between the content of row(i.e.columns)  -->
    

    <style>
      .form-control{
        width: 100%;
        margin-bottom: 1rem;;
        background-color: rgb(231, 234, 241);
      }
      input[type="submit"]{
        border-radius: 20px;
    padding: 7px 2rem;
      }


    </style>
      <div class="row">
      <div class="col-md-7">
            <form action="response2.php" method="POST">
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <input type="text" name = "name" class="form-control" placeholder="Full Name">
           </div>
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <input type="email" name= "email"class="form-control" placeholder="Email Address">
          </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-12">
           <div class="form-group">
             <input type="text" name = "phone" class="form-control" placeholder="Phone Number">
           </div>
         </div>
       </div>
            
       <div class="row">
         <div class="form-group">
           <textarea name="" class="form-control" name = "message" placeholder="Message" id="" rows="5"></textarea>
         </div>
       </div>


       <input type="submit" class="btn btn-primary" value="SUBMIT"> 
            </form>
       </div>

        <!-- footer contact us section -->

         <!-- footer contact us section -->
  
                  <div class="col-md-4 d-flex justify-content-end sadadd" >
                    <div class="footer-contact-us">
                    <div class="footer-contact-us-page-body">
                      <i class="fa-solid fa-location-dot"> </i>
                    <p>Baltimore,MD,US</p><br>
                    <i class="fa-solid fa-envelope"></i>
                    <p>brianrosendo@gmail.com</p><br>
                    <i class="fa-solid fa-phone"></i>
                    <p>+1 443-769-0316
</p><br>
                    <i class="fa-solid fa-clock"></i>
                    <p>Opening Times:</p>
                    <p> Mon-Sun: 6:00-18:00</p><br>
    
                    </div>
                  </div>
                </div> 
                <!-- footer contact us section ends here -->
    </div>
       
         
      </div>
    </div>
    

  

  <!-- contact ends here -->

  <?php include "footer_sec.php"; ?>
