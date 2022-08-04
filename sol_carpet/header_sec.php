<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome cdn using kit-->
    <script src="https://kit.fontawesome.com/f0894016da.js" crossorigin = "anonymous"></script>
    <title>Sol Carpet Repair</title>    
    <!-- link for css  -->
  <link rel="stylesheet" href="style.css">
  <!-- link for js fancy -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    
  </head>
  <body>
      <!-- we cant set the height of a containera and the height of a container is auto. -->
      <!-- setting the container with no border in viewport(window) -->

<style>
  @media(min-width: 900px){
     .carousel-caption{
    width: 57%;
margin: auto;
  }
.carousel-inner{
  height: 98vh;
}
.carousel-box img,.carousel-fade .carousel-item{
  height: 100%;
  width: 100%;
  object-fit: cover;
}

  }
 [placeholder]{
    color: white;
  }
  .footer-send-message-body .input{
    padding: 14px;
  }
  .carousel-caption h5{
    font-size: 1.4rem;
    font-weight: bolder;
  }
  .carousel-caption .btn-primary{
    font-size: 1rem;
    letter-spacing: 1px;
  }

  header{
    position:relative;
    z-index:1000;
  }
</style>
<!-- header starts from here -->
<header>
  <div class="top bg-primary">
    <!-- whatever the padding is,the background remains the same. -->
    <div class="container">
      <div class="row  ">
        <div class="col">
          <p>Opening Time: 9:00AM - 5:00 PM</p>
        </div>    
        <div class="col  text-end">
          <a href="https://www.facebook.com/Sol-carpet-repair-1576399482605414/"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.youtube.com/channel/UCnjoMV6JtMih8oHved0QZFw"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
  <?php $activePage = basename($_SERVER['PHP_SELF'], ".php");

                    ?>
  <div class="bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand ms-auto  mb-2 mb-lg-0" href="index.php"><img src="./images/logo.png" width="150px" 
            height="100px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- nav links excluding logo starts from here -->
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!-- ms and me represents margin start and me for margin end. -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a id ="home" class="nav-link <?php echo ($activePage==='index'||$activePage=='')?'active':''; ?>" aria-current="page"  href="index.php" 
                >Home</a>
              </li>
              <li class="nav-item">
                <a id ="aboutUs" class="nav-link <?php echo ($activePage==='about_us')?'active':''; ?>" href="about_us.php" >
                  About Us
                </a>
            </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  class="nav-link <?php echo ($activePage==='services')?'active':''; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
         
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="services.php">Carpet Stretching</a></li>
            <li><a class="dropdown-item" href="services.php">Carpet Cleaning</a></li>
            <li><a class="dropdown-item" href="services.php">Pet Damage</a></li>
            <li><a class="dropdown-item" href="services.php">Bleach Damage</a></li>
            <li><a class="dropdown-item" href=".fifth">Water Damage</a></li>
            <li><a class="dropdown-item" href="services.php">Seam Repairs</a></li>
            <li><a class="dropdown-item" href="services.php">Burn Damage Repair</a></li>
            <li><a class="dropdown-item" href="services.php">Berber Carpet Repair</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <a id ="projects" class="nav-link <?php echo ($activePage==='gallery')?'active':''; ?>" href="gallery.php">Gallery</a>
              </li>
            
              <li class="nav-item">
                <a id="reviews" class="nav-link <?php echo ($activePage==='reviews')?'active':''; ?>" href="reviews.php">
                reviews</a>
              </li>
              <li class="nav-item">
                <a id="contact" class="nav-link <?php echo ($activePage==='contact')?'active':''; ?>" href="contact.php">
                Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>