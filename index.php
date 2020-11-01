<?php
include 'includes/header.php';
?>

<title>Home</title>
<style>

.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        

   

</style>
</head>
<body>

<?php
include 'includes/menu.php';
?>

<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img_home_slider.png" alt="First slide">
    </div>
      </div>
  </div>

<br>
<br>
<center><h3>Services</h3></center>
<br>
<br>
<div class="container">
  <div class="row" id="services">
    <div class="col-sm">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/event-plan.png" alt="Event Planing">
  <div class="card-body">
    <h5 class="card-title">Event Planing</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="booknow.php" class="btn btn-secondary">Book Now</a>
  </div>
</div>
    </div>
    <div class="col-sm">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/photography.jpg" alt="photography">
  <div class="card-body">
    <h5 class="card-title">Photography</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="booknow.php" class="btn btn-secondary">Book Now</a>
  </div>
</div>
    </div>
    <div class="col-sm">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/videographer.jpg" alt="videography">
  <div class="card-body">
    <h5 class="card-title">Videography</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="booknow.php" class="btn btn-secondary">Book Now</a>
  </div>
</div>
    </div>
  </div>
</div>


<br>
<br>
<center><h3>Gallery</h3></center>
<br>
<br>

<!-- Gallert -->
 <div class="container">
 <div class="row" id="gallery">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                    <img  src="img/img_G_1.png" class="zoom img-fluid "  alt="">
                   
               
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              
                    <img  src="img/img_G_2.png" class="zoom img-fluid"  alt="">
              
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             
                    <img  src="img/img_G_3.png" class="zoom img-fluid "  alt="">
                
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                    <img  src="img/img_G_5.png" class="zoom img-fluid "  alt="">
               
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             
                    <img  src="img/img_G_5.png" class="zoom img-fluid "  alt="">
             
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              
                    <img  src="img/img_G_6.png" class="zoom img-fluid "  alt="">
             
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             
                    <img  src="img/img_G_1.png" class="zoom img-fluid "  alt="">
               
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                    <img  src="img/img_G_7.png" class="zoom img-fluid "  alt="">
              
            </div>
</div>




<?php
include 'includes/footer.php';
?>
