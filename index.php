<?php include 'head.php'; ?>
<?php include 'nav.php'; ?>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top: ">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="100">
          <img src="img/slide4.jpg" class="d-block w-100" alt="..." height="650">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h1><b>Gateway to the University</b></h1> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slide3.png" class="d-block w-100" alt="..." height="650">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h1><b>Beautiful and Conducive</b></h1> -->
          </div>
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

    <!-- About Section -->
    <?php include 'login_modal.php';?>

    <!-- Projects Section -->
     <section id="services"><!-- 
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div> -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto"><a href="">
              <i class="fas fa-4x fa-calendar-alt text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Lecture Timetable</h3></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto"><a href="">
              <i class="fas fa-4x fa-calendar-week text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Examination Timetable</h3></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto"><a href="">
              <i class="fas fa-4x fa-user-graduate text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Student Help</h3></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto"><a href="">
              <i class="fas fa-4x fa-users text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Staff Help</h3></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section -->
    <section class="contact-section bg-black contact-pad">
      <div class="container">
        <div class="img-center">
          <img src="img/remita.png" class="img-center">
        </div>
      </div>
    </section>
<?php include 'footer.php'; ?>