
<body style="background-color: #508bfc;">
<?php
  $data = new EtudiantController();
  $etudiant = $data->getOneEtudiant();
if(isset($_POST['login'])) {
  $login = new EtudiantController();
  $login->auth();
}
?>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row">
      <div class="col-md-5 mx-auto">
       <?php include('includes/alert.php') ?>
      </div>
    </div>       
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Sign in</h3>
             <form action="<?php echo BASE_URL;?>updateEtudiant" method="POST"> 
            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="email" class="form-control form-control-lg" placeholder="email"/>
            </div>
            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2"  name="password" class="form-control form-control-lg" placeholder="Password"/>
            </div>
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
