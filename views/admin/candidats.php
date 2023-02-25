<body>
  <?php
  $data = new EtudiantController();
if(isset($_POST['find'])) {
    $etudiants = $data->findEtudiant();
}else{
$etudiants = $data->getAllEtudiants();
}
$filiere = $data->getEtudiantsFiliere();
$pays = $data->getAllEtudiantPays();
$serie = $data->getAllEtudiantSerie();

?>
  <div class="wrapper">
    <?php include('sidebar.php') ?>
    <div class="content">
      <?php include('nav.php');?>
      <div class="main mx-3 mt-5">
        <div class="row mb-4">
          <div class="col-md-3">
            <h4 class="text-primary">Liste des candidats</h4>

          </div>
          <div class="col-md-3 ms-auto">
            <form class="d-flex" method="POST">
              <div class="input-group mb-3">
                <input type="search" name="search" class="form-control" aria-label="Recipient's username"
                  aria-describedby="basic-addon2" placeholder="chercher">
                <button type="submit" name="find" class="btn btn-primary"><i class="fa fa-search"
                    aria-hidden="true"></i></button>
              </div>
            </form>
          </div>

        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
            <?php include 'views/includes/alert.php'; ?>
        </div>
            </div>
        <div class="row mb-3">
          <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                  <th>Nom et Prenom</th>
                  <th>Baccalauriat</th>
                  <th>Note</th>
                  <th>année du bac</th>
                  <th>Filiere choisie</th>
                  <th>Coordonnées</th>
                  <th>Etat</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($etudiants as $etud) { ?>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="public/images/avatars/<?php echo $etud['image']?>" alt="" style="width: 45px; height: 45px"
                        class="rounded-circle" />
                      <div class="ms-3">
                        <p class="fw-bold mb-1"><?php echo $etud['nom'].' '. $etud['prenom']?></p>
                        <p class="text-muted mb-0"><?php echo $etud['email']?></p>
                      </div>
                    </div>
                  </td>
                  
                  <td>

                    <p class="fw-normal mb-1"><?php echo $serie['nom_serie']?></p>
                    <p class="text-muted mb-0"><?php echo $etud['etabliss']?></p>
                  </td>
                  <td>
                    <?php echo $etud['note']?>
                  </td>
                  <td>
                    <?php echo $etud['anne_bac']?>
                  </td>
               
                  <td>
                  <?php echo $filiere['libelle']?>
                  </td>
                  <td>
                  <p class="fw-normal mb-1"><?php echo $etud['ville']?></p>
                    <p class="text-muted mb-0"><?php echo $pays['libelle']?></p>
                  </td>
                   <td>
                   <?php 
                   if($etud['etat']==0){
                    echo "<span class='badge bg-info'>En attend</span>";
                   }
                  elseif($etud['etat']==1) {
                    echo "<span class='badge bg-warning'>admis</span>";
                   }  
                   ?>
                   </td>
                  <td class="d-flex align-items-center justify-content-center pt-3">
                    <form action="<?php echo BASE_URL;?>updateCandidat" method="POST">
                    <input type="hidden" name="id" value="<?php echo $etud['id']; ?>">
                   <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                  </form>
                   <form action="<?php echo BASE_URL;?>candidatAdmis" method="POST">
                   <input type="hidden" name="id" value="<?php echo $etud['id']; ?>">
                   <button  class=" btn btn-success mx-2" type="submit" name="submit"> <i class="fa fa-check" aria-hidden="true"></i></button></form>
                   <form action="<?php echo BASE_URL;?>candidatReffuse" method="POST">
                   <input type="hidden" name="id" value="<?php echo $etud['id']; ?>">
                   <button class=" btn btn-danger" type="submit" name="submit"> <i class="fas fa-window-close"></i> </button>
                  </form>
                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
