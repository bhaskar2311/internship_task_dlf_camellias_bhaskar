<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLF Camellias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DLF Camellias</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.camellias.org.in/">Visit Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
               
            </div>
        </div>
    </nav>



    <!-- Carousel  -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="8655.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome To DLF Camellias </h2>
        <button type="button" onclick="window.location.href='http://www.camellias.org.in/'" class="btn btn-primary">Visit Link</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>Welcome To DLF Camellias </h2>
      <button type="button" onclick="window.location.href='http://www.camellias.org.in/'" class="btn btn-primary">Visit Link</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="d44.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>Welcome To DLF Camellias </h2>
      <button type="button" onclick="window.location.href='http://www.camellias.org.in/'" class="btn btn-primary">Visit Link</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Card  -->
    <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">DLF The Camellias Gurgaon Sector 42</h5>
    <p class="card-text">DLF Camellias Gurgaon @ sector 42 is ready to move project presents smartly designed #(4 BHK, 5 BHK & 6 BHK) homes with @ 429 Units at sought-after locations. All homes are smartly planned and resonate with optimistic vibes and feel.</p>
    <button data-toggle="modal" type="button" class="btn btn-primary" data-target="#meramodal">Download Brochure</button>
  </div>
  <div class="card-footer text-muted">
 Download Brochure To Know More About Us
  </div>
</div>



    <!-- Modal Form  -->
    <div class="modal" id="meramodal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="download.php" method="POST">
          <div class="modal-body">
          <div class="mb-3">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="address" cols="20" rows="5" class="form-control form-control-lg" placeholder="Address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="phone" class="form-control form-control-lg" placeholder="Phone Number" required>
                    </div>

                    <div class="mb-3">
                        <input type="bhk" name="bhk" class="form-control form-control-lg" placeholder="How Many BHK's" required>
                    </div>
          </div>
          <div style="clear:both;"></div>
          <div class="modal-footer">
          <!-- <button type="button" onclick="kjdeiuewf" lass="btn btn-primary">Primary</button> -->
            <button type="button" name="signup-btn" class="btn btn-lg btn-block"><a href="documents/DLF-Camelias-Details.pdf" download>Download Brochure</a></button> 
            <button class="btn btn-lg btn-block" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          </div>
      </div>
      </form>
    </div>
  </div>
  </div>

</body>

</html>