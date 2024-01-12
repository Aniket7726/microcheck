<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="Images/Logo.jpg" width="200">
    </a>
    <button class="navbar-toggler" type="button" style="background:#fff;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <img src="Images/Logo.jpg" width="200" alt="">
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="background-color: #0b3823;">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item px-3">
            <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link text-white" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown px-3">
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="urine.php">Urine For Culture & Sensitivity</a></li>
              <li><a class="dropdown-item" href="gram.php">Gram Stain / Koh / Z-N Stain</a></li>
              <li><a class="dropdown-item" href="giemsa.php">Giemsa stain For Pneumocystis Carini(Pcp)</a></li>
              <li><a class="dropdown-item" href="service.php">More Services</a></li>
            </ul>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link text-white" aria-current="page" href="blog.php">Blog</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link text-white" href="contact.php">Contact</a>
          </li>
        </ul>
        <div class="d-flex">
          <button><a href="">Learn More</a></button>
        </div>
      </div>
    </div>
  </div>
</nav>