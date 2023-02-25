<body>
<?php
if(isset($_POST['id'])) {
    $existFiliere = new FiliereController();
    $filiere = $existFiliere->getOneFiliere();
}else {
    Redirect::to('filiere');
}
if(isset($_POST['submit'])) {
    $data = new FiliereController();
     $data->modifierFiliere();
}
?>
 <div class="wrapper">
    <?php include('sidebar.php') ?>
    <div class="content">
      <?php include('nav.php');?>
      <div class="main mx-5 mt-5">
        <div class="row mb-4">
          <div class="col-md-3">
            <h4 class="text-primary">Ajouter une filiere </h4>

          </div>

        </div>
        <div class="row">
        <div class="col-md-8 mx-auto">
         <div class="card shadow p-5" style="background-color: #f6f9fb;">
           <form action="" method="POST">
             <div class="d-flex flex-row">
                <input type="hidden" name="id" value="<?php echo $filiere->id ?>">
               <div class="mb-3 me-5">
                 <label for="libelle" class="form-label">Nom de la filiere</label>
                 <input type="text"
                   class="form-control" name="libelle" id="libelle" aria-describedby="helpId" placeholder="" value="<?php echo $filiere->libelle ?>">
                 <small id="helpId" class="form-text text-muted">Champs obligatoire</small>
               </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Modifer</button>
           </form>

         </div>
        </div>

        </div>

      </div>
    </div>
  </div>
