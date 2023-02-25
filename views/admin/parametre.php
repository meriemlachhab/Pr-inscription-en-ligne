<body>
  <?php
if(isset($_POST['submit'])) {
  $data = new AdminController();
  $data->DateInscription();
}
?>
  <div class="wrapper">
    <?php include('sidebar.php') ?>
    <div class="content">
      <?php include('nav.php');?>
      <div class="main mx-5 mt-5">
        <div class="row mb-4">
          <div class="col-md-6">
            <h4 class="text-primary">Date d'ouverture du préinscription </h4>

          </div>

        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
          
            </div>
        </div>
        <div class="row">
        <div class="col-md-8 mx-auto">
         <div class="card shadow p-5" style="background-color: #f6f9fb;">
           <form action="" method="POST">
             <div class="d-flex flex-row">
               <div class="mb-3 me-5">
                 <label for="debut" class="form-label">Date de debut</label>
                 <input type="date"
                   class="form-control" name="debut" id="debut" aria-describedby="helpId" placeholder="">
                 <small id="helpId" class="form-text text-muted">Champs obligatoire</small>
               </div>
               <div class="mb-3">
                 <label for="fin" class="form-label">Fin</label>
                 <input type="date"
                   class="form-control" name="fin" id="fin" aria-describedby="helpId" placeholder="">
                 <small id="helpId" class="form-text text-muted">Champs obligatoire</small>
               </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Deffenir</button>
           </form>

         </div>
        </div>

        </div>

      </div>
    </div>
  </div>
