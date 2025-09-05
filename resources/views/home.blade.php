<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/style.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="#">

                            <img src="https://web-new.rupp.edu.kh/wp-content/uploads/2025/02/logo-rupp-for-web-.png" alt="">
                        </a>
                    </li>
                    <li><a href="#">Home</a></li>
                     <li><a href="#">Home111</a></li>
                    <li><a href="#">Academic</a></li>
                    <li><a href="#">Centers & Offices</a></li>
                    <li><a href="#">Researchs & Projects</a></li>
                    <li><a href="#">Scholarships & News</a></li>
                    <li><a href="#">Student Life</a></li>
                    <li><a href="#">E-Library</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
    </header>
    <!-- home -->

     <section>
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <!-- "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRpEt4EEeczV_aMmvZmK3CN0eUzDPTBbsn2bhBWhI3M4oJcusZ_Ud5N15CKnQ0lCuiAqw&usqp=CAU" -->
            <img class="d-block w-100 custom-height bg-danger"  src="" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Royal University of Phnom Penh:Excellence in Education</h5>
              <p>Discover Cambodia's largest and oldest university, where education, research, and service to society come together to shape future leaders and innovators.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">

            <img src="..." class="d-block w-100 custom-height bg-secondary" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Global Partnerships for a Brighter Future</h5>
              <p>RUPP fosters global connections to enhance learning opportunities and cultural exchange for students and staff.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100 custom-height bg-info" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Diverse Faculties and Institutes</h5>
              <p>Explore a wide range of academic programs from Science, Social Sciences, Engineering, and Humanities to the renowned Institute of Foreign Languages and Development Studies.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100 custom-height bg-success" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Research and Innovation</h5>
              <p>RUPP is at the forefront of innovation, driving impactful research in science, technology, and social development to address real-world challenges</p>
            </div>
          </div>
        </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
     </section>
    <!-- home -->
</body>
</html>
