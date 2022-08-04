<?php include "header_sec.php"?>
<!-- breadcrumb starts here -->
<div class="bread">
  <div class="container">
    <h1>Gallery</h1>
  </div>
</div>
<!-- breadcrumb starts here -->
 
  <style>
    .box{
      height: 14rem;
      overflow: hidden;  transition: all 1.5s ease-in;
    }
    .box img{
            overflow: hidden;  transition: all 1.5s ease-in;

    }
    .box img:hover{
      transform: scale(1.3);
      transition: all 1.5s ease-in;
    }
  </style>

  <?php include "projects_sec.php";?>

   <style>
    .projets-body img{
      height: 14rem;
      width: 100%;
      object-fit: cover;
    }
     
   </style>



<?php include "footer_sec.php"; ?>
