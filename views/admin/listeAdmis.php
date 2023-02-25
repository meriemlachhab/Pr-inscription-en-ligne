<body>
  <?php
  $data = new EtudiantController();

$etudiants = $data->getAdmisEtudiant();


?>
  <div class="wrapper">
    <?php include('sidebar.php') ?>
    <div class="content">
      <?php include('nav.php');?>
      <div class="main mx-3 mt-5">
        <div class="row mb-4">
          <div class="col-md-3">
            <h4 class="text-primary">Liste des Admis</h4>

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
        
            <div class="row mb-3">
              <div class="col-md-2 ms-auto">
              <form method="post" action="<?php echo BASE_URL;?>Export">
             <input type="submit" name="export" class="btn btn-success" value="Export" />
          </form>
              </div>
            </div>
        <div class="row mb-3">
          <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                  <th>Nom </th>
                  <th>Prenom</th>
                  <th>CNE</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($etudiants as $etud) { ?>
                <tr>
                  
                  <td>
                    <?php echo $etud['nom']?>
                  </td>
                  <td>
                    <?php echo $etud['prenom']?>
                  </td>
               
                  <td>
                  <?php echo $etud['cne']?>
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
