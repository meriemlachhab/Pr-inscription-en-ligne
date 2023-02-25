
<body style="background-color: #508bfc;">
<?php 
if(isset($_POST['submit'])) {
  $login = new AdminController();
  $login->auth();
}
?>
<section class="vh-100" >
  <div class="container py-5 h-100">
  <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <?php include './views/includes/alert.php'; ?>
        </div>
  </div>        
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Sign in</h3>
             <form action="" method="POST"> 
            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="username" class="form-control form-control-lg" placeholder="Username"/>
             
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2"  name="password" class="form-control form-control-lg" placeholder="Password"/>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
          </form>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
