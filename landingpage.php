<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/"> -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>caps_proj</title>

     <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!--bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>

  <!-- loader to guys 
    <div class="loader">
    <svg viewBox="0 0 80 80">
        <circle id="test" cx="40" cy="40" r="32"></circle>
    </svg>
</div>

<div class="loader triangle">
    <svg viewBox="0 0 86 80">
        <polygon points="43 8 79 72 7 72"></polygon>
    </svg>
</div>

<div class="loader">
    <svg viewBox="0 0 80 80">
        <rect x="8" y="8" width="64" height="64"></rect>
    </svg>
</div> -->

    <!-- <nav class="navbar navbar-expand-lg bg-primary" >
        <div class="container-fluid d-flex justify-content-end">
          <a class="navbar-brand text-white" href="#">World of Smile</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              <a class="nav-link text-white" href="#">About Us</a>
              <a class="nav-link text-white" href="#">Our Service</a>
              <a class="nav-link disabled text-white" aria-disabled="true">Contacts</a>
            </div>
          </div>
        </div>
      </nav>
      <br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end margin">
        <button class="btn btn-dark me-md-2">Request Appointment</button>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end margin">
        <button class="btn btn-dark me-md-2">Rates</button>
        </div>
        <br> 
        <div class="d-grid gap-2 d-md-flex justify-content-md-end margin">
        <button class="btn btn-dark me-md-2">Available Schedules</button>
        </div>
        

      <div class="row1">
        <img src="hanni_stream.jpeg" class="rounded float-start" alt="image">
      </div>
      <div class="row2">
        <img src="hanni.jpg" class="rounded float-start" alt="image">
      </div> -->
  
       <!-- Header Start -->
  <header class="header p-3 position-absolute start-0 top-0 end-0">
    <div class="d-flex justify-content-between align-items-center">
      <a href="/" class="text-decoration-none text-black fs-5 fw-bold"><img src="logo_WOS.png" alt="Logo" class="logo" width="30"> World of Smiles</a>
      
      <ul class="nav_links">
        <li class="nav-item"><a class="nav-link"  href="home">Home </a></li>
        <li class="nav-item"><a class="nav-link" href="services">Our Services</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contacts">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
      </ul>
    
      <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Log in
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <form class="form" action="login.php" method="POST">
        <p class="form-title">Sign in to your account</p>
      
          <div class="input-container">
            <input type="text" placeholder="Username" name="username" id="username">
            <span>
           </span>
        </div>
        <div class="input-container">
            <input type="password" placeholder="Enter password" name="password" id="password">
          </div>
          <button type="submit" class="submit">
          Sign in
        </button>

        <p class="signup-link">
          No account?
          <a href="">Sign up</a>
        </p>
      </form>
      </div>
     
    </div>
  </div>
</div>
      -->
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Flyout Navigation Start -->
  <nav class="collapse navbar-collapse dropdown-nav" id="navbar">

    <div class="dropdown-nav__container container-xxl d-flex align-items-start align-items-md-center">

      <div class="row align-items-start">

        <div class="col-12 col-sm-4 mt-4">
          <a href="#" class="row text-decoration-none">
            <div class="col-2 col-sm-12 mb-4">
              <img src="img/1-coffe-flavour.jpg" alt="Coffe Flavour" class="img-fluid" width="553" height="746" loading="lazy">
            </div>
            <div class="col-10">
              <h3>Amazing Flavour</h3>
              <p>Find out more about our aAmazing Flavour</p>
              <p>Learn More <i class="bi bi-arrow-right-short"></i></p>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-4 mt-4">
          <a href="#" class="row text-decoration-none">
            <div class="col-2 col-sm-12 mb-4">
              <img src="img/2-health-benefits.jpg" alt="Coffe Flavour" class="img-fluid" width="553" height="746" loading="lazy">
            </div>
            <div class="col-10">
              <h3>Surprising Benefits</h3>
              <p>Find out more about our Surprising Benefits</p>
              <p>Learn More <i class="bi bi-arrow-right-short"></i></p>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-4 mt-4">
          <a href="#" class="row text-decoration-none">
            <div class="col-2 col-sm-12 mb-4">
              <img src="img/3-essential-nutrients.jpg" alt="Coffe Flavour" class="img-fluid" width="553" height="746" loading="lazy">
            </div>
            <div class="col-10">
              <h3>Essential Nutrients</h3>
              <p>Find out more about our Essential Nutrients</p>
              <p>Learn More <i class="bi bi-arrow-right-short"></i></p>
            </div>
          </a>
        </div>
      </div>

      <button class="navbar-toggler dropdown-nav__closeNavBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </button>

    </div>

  </nav>
  <!-- Flyout Navigation End -->

  <!-- Hero Start -->
  <section class="hero">

    <div class="hero__overlay"></div>

    <!-- Video not included. Download: https://www.pexels.com/video/two-people-in-front-of-a-campfire-pouring-water-from-a-kettle-2675515/ -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy" class="hero__video">
      <source src="img/Pexels Videos 2675515.mp4" type="video/mp4">
    </video>

    <div class="hero__content h-100 container-custom position-relative">
      <div class="d-flex h-100 align-items-center hero__content-width">
        <div class="text-black">
          <h1 style="color:darkblue;" class="hero__heading fw-bold mb-4">We Provide Dental Clinic Services</h1>
          <p style="color:black;" class="lead mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#" class="mt-2 btn btn-lg btn-outline-dark" role="button">Get Started</a>
        </div>
        
        <!-- <img class= "doc_img" src="Ivan Marcelo.jpg" alt="IMG" width="300" height="300" > -->
        
      </div>
    </div>
    
    <a href="#scroll-down" class="hero__scroll-btn">
      Explore <i class="bi bi-arrow-down-short"></i>
    </a>

  </section>
  <!-- Hero End -->

  <a id="scroll-down"></a>
  <!-- Section One Start -->
  <section class="steps container-custom">

    <div class="row">
      <div class="col-12 col-sm-6 d-md-flex justify-content-md-ceneter">
        <img src="Ivan Marcelo.jpg" alt="Coffe Flavour" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" loading="lazy">
      </div>

      <div class="col-12 col-sm-6 align-self-center justify-content-md-ceneter">

        <div class="steps__content-width">
          <span>01</span>
          <h1 class="h2 mb-4">Chu Chu</h1>
          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia totam dolorem quasi! Quis fugiat totam id fuga non distinctio incidunt amet nesciunt itaque, tempore repellat eos natus quo mollitia laborum.</p>
          <a href="#">Read More <i class="bi bi-arrow-right"></i></a>

        </div>

      </div>
    </div>

  </section>
  <!-- Section One End -->

  <!-- Section One Start -->
  <section class="steps steps--background">

    <div class="container-custom">

      <div class="row">
        <div class="col-12 col-sm-6 d-md-flex justify-content-md-ceneter order-sm-1">
          <img src="pic1.jpg" alt="Health Benefits" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" loading="lazy">
        </div>

        <div class="col-12 col-sm-6 align-self-center justify-content-md-ceneter">
          <div class="steps__content-width">
            <span>02</span>
            <h1 class="h2 mb-4">Surprising Health Benefits</h1>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia totam dolorem quasi! Quis fugiat totam id fuga non distinctio incidunt amet nesciunt itaque, tempore repellat eos natus quo mollitia laborum.</p>
            <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Section One End -->

  <!-- Section One Start -->
  <section class="steps container-custom">

    <div class="row">
      <div class="col-12 col-sm-6 d-md-flex justify-content-md-ceneter">
        <img src="pic2.jpg" alt="Essential Nutrients" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" loading="lazy">
      </div>

      <div class="col-12 col-sm-6 align-self-center justify-content-md-ceneter">

        <div class="steps__content-width">
          <span>03</span>
          <h1 class="h2 mb-4">Essential Nutrients</h1>
          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia totam dolorem quasi! Quis fugiat totam id fuga non distinctio incidunt amet nesciunt itaque, tempore repellat eos natus quo mollitia laborum.</p>
          <a href="#">Read More <i class="bi bi-arrow-right"></i></a>

        </div>

      </div>
    </div>

  </section>
  <!-- Section One End -->

  <!-- Section With 3 Col's Start -->
  <section class="bg-dark text-white py-4">
    <div class="container-custom my-4">
      <div class="row">

        <div class="col-12 col-sm-4 mb-4">
          <img src="img/1-coffee-flavour-small.jpg" class="mb-4 img-fluid" alt="Coffe Flavour" width="441" height="248" loading="lazy">
          <h3>Amazing Coffee Flavour</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A veniam ullam illo dolorum dolor. Dolor, velit vitae? Fugiat quidem nostrum nobis sit beatae consequuntur quisquam iusto reprehenderit voluptatibus officia? Natus.</p>
        </div>

        <div class="col-12 col-sm-4 mb-4">
          <img src="img/2-health-benefits-small.jpg" class="mb-4 img-fluid" alt="Health Benefits" width="441" height="248" loading="lazy">
          <h3>Health Benefits</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A veniam ullam illo dolorum dolor. Dolor, velit vitae? Fugiat quidem nostrum nobis sit beatae consequuntur quisquam iusto reprehenderit voluptatibus officia? Natus.</p>
        </div>

        <div class="col-12 col-sm-4 mb-4">
          <img src="img/3-essential-nutrients-small.jpg" class="mb-4 img-fluid" alt="Essential Nutrients" width="441" height="248" loading="lazy">
          <h3>Essential Nutrients</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A veniam ullam illo dolorum dolor. Dolor, velit vitae? Fugiat quidem nostrum nobis sit beatae consequuntur quisquam iusto reprehenderit voluptatibus officia? Natus.</p>
        </div>

      </div>
    </div>
  </section>
  <!-- Section With 3 Col's End -->

  <!-- Footer Start -->
  <footer class="footer bg-dark text-white">
    <div class="container-custom d-flex justify-content-between align-items-center py-3 border-highlight">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="me-2 text-muted text-decoration-none">
          <i class="bi bi-cup"></i>
          <span>&copy; 2022 GorillaCoffee</span>
        </a> 
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex text-white">
        <li class="ms-3 "><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
      </ul>


    </div>
  </footer>
  <!-- Footer End -->
      
    
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>