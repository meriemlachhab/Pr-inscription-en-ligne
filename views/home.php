
<body>
<?php
$admin = new AdminController();
$dateInsr = $admin->getDateInscri();

?>
    <header class="position-relative">
        <div class=" block_information px-5 py-2 d-flex">
            <div class="col-md-5">
                <span class="me-4"><i class="fas fa-envelope me-2" aria-hidden="true"></i>contact.ests@uca.ma</span>
                <span><i class="fa fa-phone me-2" aria-hidden="true"></i> (+212) 5 24 62 50 53</span>
            </div>
            <div class="col md-5 d-flex justify-content-end pe-5">
                <span class="cercle "><i class="fab fa-facebook-f"></i></span>
                <span class="cercle mx-3"><i class="fab fa-twitter "></i></span>
                <span class="cercle me-3"><i class="fab fa-linkedin-in"></i></span>
                <span class="cercle"><i class="fab fa-instagram"></i></span>
            </div>
        </div>
        <?php include('includes/navbar.php'); ?>
        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                
                <div class="carousel-inner carousel-size">
                    <div class="carousel-item active">
                        <img src="public/images/3home.jpg" class="img-fluid d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h1>Preinscription el line</h1>
                            <button type="button" class=" mt-3 btn p-2 btn-warning">Lire la suite</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/2home.jpg" class="img-fluid d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h1>First slide label</h1>
                            <button type="button" class=" mt-3 btn p-3 btn-warning">Lire la suite</button>
                            <!-- .alert-primary, .alert-secondary, .alert-success, .alert-danger, .alert-warning, .alert-info, .alert-light, .alert-dark -->


                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/1home.jpg" class="img-fluid d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h1>Third slide label</h1>
                            <button type="button" class=" mt-3 btn p-3 btn-warning">Lire la suite</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </header>
    <main>
        <section class="sect1">
            <div class="container">
                <div class="row">
                    <div class="col mt-5">
                        <div class="card  border-0">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="./public/images/doyen.jpg" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body ms-3">
                                        <h5 class="card-title fs-3">Mot du doyen</h5>
                                        <p class="card-text ">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Beatae adipisci iure ipsam velit ratione excepturi, dolor maxime molestiae
                                            nemo aspernatur maiores quos? Repellendus vitae adipisci nemo distinctio.
                                            Facilis, eos iusto?</p>
                                        <p class="card-link"><a class="text-muted text-decoration-none"
                                                href="">Découvrir le met</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
<section class="actulaite  p-4">
    <div class="container-fluid">
        <h1 class="text-center py-4">Actualité</h1>
            <div class="card-group ">
  <div class="card shadow ">
    <img src="./public/images/recrut.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Recrutement</h5>
      <p class="card-text">النتيجة النهائية لمباراة توظيف استاذ التعليم العالي مساعد تخصص الإلكترونيك و الإعلاميات الصناعية دورة 05 شتنبر 2022
</p>
<button type="button" class="btn fw-bold btn-outline-info">voir plus </button>
    </div>
    <div class="card-footer d-flex justify-content-between flex-md-shrink-0">
     <span><small class="text-muted"><i class=" text-info fw-bold fas fa-clock" aria-hidden="true"></i>08-11-2022</small></span>
     <span><i class="text-info fw-bold fa fa-user" aria-hidden="true"></i> <small class="text-muted">EstsAdmin</small></span> 
    </div>
  </div>
  <div class="card shadow mx-3">
    <img src="./public/images/student.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Semaine d'integration</h5>
      <p class="card-text">
 Sous le thème : Une bonne intégration est la clé de votre réussite.</p>
 <button type="button" class="btn fw-bold btn-outline-info">voir plus </button>
    </div>
    <div class="card-footer d-flex justify-content-between flex-md-shrink-0">
     <span><small class="text-muted"><i class=" text-info fw-bold fas fa-clock" aria-hidden="true"></i>08-11-2022</small></span>
     <span><i class="text-info fw-bold fa fa-user" aria-hidden="true"></i> <small class="text-muted">EstsAdmin</small></span> 
    </div>
  </div>
  <div class="card shadow me-3">
    <img src="./public/images/avis-au-etudiants2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">plateforme numérique </h5>
      <p class="card-text">Les étudiants sont invités à s'inscrire à la pkateform des cours en ligne.</p>
      <button type="button" class="btn fw-bold btn-outline-info">voir plus </button>
    </div>
    <div class="card-footer d-flex justify-content-between flex-md-shrink-0 ">
     <span><small class="text-muted"><i class=" text-info fw-bold fas fa-clock" aria-hidden="true"></i>08-11-2022</small></span>
     <span><i class=" text-info fw-bold fa fa-user" aria-hidden="true"></i> <small class="text-muted">EstsAdmin</small></span> 
    </div>
  </div>
  <div class="card shadow">
    <img src="./public/images/acivity.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">ESTS – Activité para universitaire</h5>
      <p class="card-text">Adhésion aux activités para-universitaires de l’EST-SAFI.</p>
        <button type="button" class="btn fw-bold btn-outline-info">voir plus </button>
      
    </div>
    <div class="card-footer d-flex justify-content-between flex-md-shrink-0">
     <span><small class="text-muted"><i class=" text-info fw-bold fas fa-clock" aria-hidden="true"></i>08-11-2022</small></span>
     <span><i class="text-info fw-bold fa fa-user" aria-hidden="true"></i> <small class="text-muted">EstsAdmin</small></span>
    </div>
  </div>
</div>         
    </div>
</section>
<section class="chiffres" id="about-bg">
    <div class="container">
        <div class="about-bg-heading">
         <h1>ESTS EN CHIFFRES</h1> 
        </div>
        <div class="row">
            <div class="col-md-3">
             <div class="about-bg-wrapper">
                <span class="count" id="nbr1">5616</span>
                <p>Etudiats</p>
             </div>
            </div>
            <div class="col-md-3">
                
              <div class="about-bg-wrapper">
                <span class="count" id="nbr2">160</span>
                 <p>Staff administratif et professionnel</p> 
              </div>
            
                </div>
                <div class="col-md-3">
                <div class="about-bg-wrapper">
                <span class="count" id="nbr3">70</span>
                <p>Accords internationaux</p>
                </div>
                </div>
                <div class="col-md-3">
                <div class="about-bg-wrapper">
                <span class="count" id="nbr4">21</span>
                <p>Implantations</p> 
             </div>
                </div>
        </div>
    </div>
    <div class="cover"></div>
</section>

    </main>
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" placeholder="Email address" class="form-control" />
              
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      L'Ecole Supérieure de Technologie de SAFI ESTS est un établissement public d'enseignement supérieur à finalité professionnalisant. Elle a été créée en 1986 par le Ministère de l'Enseignement Supérieur...
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="container-fluid">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Navigation</h5>
            <div class="block-links">
                <span><a href="">Acceuil</a></span>
                <span><a href="">Formation Initiale</a></span>
                <span><a href="">Formation Continue</a></span>
                <span><a href="">Toutes les actualités</a></span>
                <span><a href="">Galerie</a></span>
                
                
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Liens utils</h5>
          <div class="block-links">
                <span><a href="">Contactez Nous</a></span>
                <span><a href="">Cady Ayad</a></span>
                <span><a href="">Ministère de l'Enseignement Supérieur et de Recherche</a></span>

            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contacter Nous</h5>
          <div class="block-links">
          <span><a href=""><i class="fa fa-map-marker me-2" aria-hidden="true"></i>Ecole Supérieure de Technologie ,Lamiaa Safi, Maroc</a></span>
                <span><a href=""><i class="fa fa-phone me-2" aria-hidden="true"></i> (+212) 5 24 62 50 53</a></span>
                <span><a href=""><i class="fa fa-globe" aria-hidden="true"></i>http://www.ests.uca.ma/</a></span>
          </div>
        </div>
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 block-copy-right" >
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">meriemlachhab.com</a>
  </div>
  <!-- Copyright -->
</footer>
   
