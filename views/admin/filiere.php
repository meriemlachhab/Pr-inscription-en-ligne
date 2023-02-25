
<body>
<?php

$data = new FiliereController();
$filieres = $data->getAllFilieres();

?>
    <div class="wrapper">
      <?php include('sidebar.php') ?>
        <div class="content" >
            <?php include('nav.php');?>
            <div class="main mx-5 mt-5">
            <div class="row">
            <div class="col-md-8 mx-auto">
            <?php include 'views/includes/alert.php'; ?>
        </div>
            </div>
                <div class="row mb-4">
                    <div class="col-md-3">
                        <h4 class="text-primary">Liste des Filieres</h4>

                    </div>
                 
                </div>
                
               <div class="row">

                   <div class="table-responsive">
                   <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Id</th>
      <th>Filiere</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($filieres as $fil) { ?>
    <tr>
      <td>
      <?php echo $fil['id']?>
      </td>
      <td>
      <?php echo $fil['libelle']?>
      </td>
      <td class="d-flex flex-row align-items-center">
      <form action="<?php echo BASE_URL ;?>updateFiliere" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $fil['id']; ?>">
                                    <button  class="btn btn-sm btn-success me-2"><i class="fa fa-edit"></i></button>
                                </form>
                                <form action="<?php echo BASE_URL ;?>deleteFiliere" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $fil['id']; ?>">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash" ></i></button>
                                </form>

      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
                   </div>
               </div>
                <div class="row mt-4">
                  <div class="col-md-4 ms-auto">
                    <a href="<?php echo BASE_URL ;?>addFiliere" class="btn btn-primary"><i class="fas fa-plus"></i>Ajouter</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    