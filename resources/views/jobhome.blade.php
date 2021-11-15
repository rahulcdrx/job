@yield('layouts/header')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Job Portal</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/css/styles.css" rel="stylesheet" />
        <style>
.news {
    width: 160px
}

.news-scroll a {
    text-decoration: none
}

.dot {
    height: 6px;
    width: 6px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 2px !important;
    background-color: rgb(207, 23, 23);
    border-radius: 50%;
    display: inline-block
}
.bg-org {
    background-color: #F26522 !important;
}
</style>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"><img src="images/sahuli.jpg"  width="82"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Subscription</a></li>
                        
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Log Out</a>
        
        </div>
      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class=" bg-gradient text-white">
        <div class="row">
 <div class="col-md-4">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ads1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 </div>
 <div class="col-md-4">
 <div class="text-center" >
   <img src="images/sahuli.jpg">
 </div>
 </div>
 <div class="col-md-4">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ads1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
</div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </header>
        <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-org py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Job News</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> </marquee>
            </div>
        </div>
    </div>
</div>
        <!-- About section-->
       
        <div class="row" style="padding-bottom: 31px;">
  <div class="col-md-3">
      <div class="text-center">
          <img class="rounded mx-auto d-block" src="images/naukripos.png" alt="" width="">
          <h2>Govt Job<h2>
        </div>
    </div>
  <div class="col-md-3">
  <div class="text-center">
      <img class="rounded mx-auto d-block" src="images/1education.png" alt="" width="">
      <h2>Private Job<h2>
    </div>
    </div>
  <div class="col-md-3">
  <div class="text-center">
      <img  class="rounded mx-auto d-block" src="images/scheme.png" alt="" width="">
      <h2>Student Update <h2>
    </div>
    </div>
  <div class="col-md-3">
  <div class="text-center">
      <img class="rounded mx-auto d-block" src="images/naukripos.png" alt="" width="">
      <h2>All Update <h2>
    </div>
    </div>
    </div>

   
   
    <div class="row" style="padding: 84px;background: orange;">
    <div class="col-sm">
    <div class="text-center" >
       <h3>333</h3>
       <h3>जॉब कार्ड</h3>
    </div>
    </div>
    <div class="col-sm">
    <div class="text-center" >
    <h3> 333</h3>
    <h3>जॉब कार्ड</h3>

    </div>
    </div>
    <div class="col-sm">
    <div class="text-center" >
    <h3>333</h3>
    <h3>जॉब कार्ड</h3>

    </div>
    </div>
    <div class="col-sm">
    <div class="text-center" >
    <h3>333</h3>
    <h3>जॉब कार्ड</h3>

    </div>
    </div>
    </div>

    <div class="row" style="padding-top:51px;">
    
    
    <div class="col-md-12">
    <div class="row" style="padding-bottom: 31px;">
  <div class="col-sm-3">
      <div class="text-center">
          <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
          <h6>Job Name<h6>
        </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    </div>
    <div class="row" style="padding-bottom: 31px;">
  <div class="col-sm-3">
      <div class="text-center">
          <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
          <h6>Job Name<h6>
        </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    </div>
    <div class="row" style="padding-bottom: 31px;">
  <div class="col-sm-3">
      <div class="text-center">
          <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
          <h6>Job Name<h6>
        </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    <div class="col-sm-3">
  <div class="text-center">
  <img class="rounded mx-auto d-block" src="images/jobpost.jpg" alt="" width="131">
  <h6>Job Name<h6>
    </div>
    </div>
    </div>
   
    
    </div>
   
  </div>
</div>
<div class="row">
 <div class="col-md-6">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ads1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 </div>
 <div class="col-md-6">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ads1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
</div>

    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <div class="row">
                <div class="col">
                <div class="text-center" style="color: #fff;">
                 <h5>About Us</h5>
                </div>
                </div>
                <div class="col">
                <div class="text-center" style="color: #fff;">
                <h5>Policy</h5>
                </div>
                </div>
                <div class="col">
                <div class="text-center" style="color: #fff;">
                <h5>Disclaimer</h5>
                </div>
                </div>
                <div class="col">
                <div class="text-center" style="color: #fff;">
                <h5>Term & Condition</h5>
                </div>
                </div>
                <div class="col">
                <div class="text-center" style="color: #fff;">
                <h5>FAQ</h5>
                </div>
                </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS--> 
        <script src="css/js/scripts.js"></script>
     
        <script src="js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
