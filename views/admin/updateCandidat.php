<body>
<?php
  $data = new EtudiantController();
  if(isset($_POST['id'])) {
  $etudiant = $data->getOneEtudiant();}
if(isset($_POST['submit'])) {
     $data->modifierEtudiant();
     Session::status('success','Candidat modifié avec success');
     Redirect::to('candidats');
}

$filiere = new FiliereController();
$filieres = $filiere->getAllFilieres();
$pays = $data->getAllPays();
$series = $data->getAllSeries();
?>
    <div class="wrapper">
        <?php include('sidebar.php') ?>
        <div class="content">
            <?php include('nav.php');?>
            <div class="main mx-3 mt-5">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <h4 class="text-primary">Modifier le candidat </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <?php include 'views/includes/alert.php'; ?>
                    </div>
                </div>
                <div class="row mb-3">
          <form method="POST" enctype="multipart/form-data">
            <div class="d-flex card-form flex-row justify-content-center">
               <div class="col-md-3">
               <div class="mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="" value="<?php echo $etudiant['nom']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <input type="hidden" name="id" value="<?php echo $etudiant['id'] ?>">
                <div class="mb-3">
                  <label for="prenom" class="form-label">Prenom</label>
                  <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['prenom']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="date_naiss" class="form-label">Date de naissance</label>
                  <input type="date" class="form-control" name="date_naiss" id="date_naiss" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['date_naiss']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="ville" class="form-label">Ville</label>
                  <input type="text" class="form-control" name="ville" id="ville" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['ville']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="note" class="form-label">Note</label>
                  <input type="number" max=20 min=10 class="form-control" name="note" id="note"
                    aria-describedby="helpId" placeholder="" value="<?php echo $etudiant['note']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class=" mt-3 mb-3">
                  <label for="password" class="form-label">Mot de passe</label>
                  <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['password']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
               </div>
              <div class=" col-md-3 mx-5">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['email']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="cin" class="form-label">CIN</label>
                  <input type="text" class="form-control" name="cin" id="cin" aria-describedby="helpId" placeholder="" value="<?php echo $etudiant['cin']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">Photo</label>
                  <input type="file" class="form-control" name="image" id="photo" aria-describedby="helpId"
                    placeholder="">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-4">
                  <label for="pays" class="form-label">Pays</label>
                  <select class="form-select form-select-lg" name="id_pays" id="pays">
                    <?php foreach($pays as $pay){ ?>
                    <option value="<?php echo $pay["id"] ;?>"><?php echo "$pay[libelle]";?></option>
                    <?php } ?>
                  </select>
                </div>
               
                <div class="mb-5">
                  <label for="serie" class="form-label">Serie de bac</label>
                  <select class="form-select form-select-lg" name="id_serie" id="serie">
                    <?php foreach($series as $serie){ ?>
                    <option value="<?php echo $serie["id"];?>"><?php echo "$serie[nom_serie]";?></option>
                    <?php  }?>

                  </select>
                </div>

                <label for="note" class="form-label">Sexe</label>
              <div class="d-flex flex-row">
                <div class="form-check me-3">
                  <input class="form-check-input" type="radio" name="sexe" id="exampleRadios1" value="Masculin">
                  <label class="form-check-label" for="sexe">
                    Masculin
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexe" id="exampleRadios2" value="Feminin">
                  <label class="form-check-label" for="exampleRadios2">
                    Feminin
                  </label>
                </div>

              </div>

              </div>
              <div class=" col-md-3">
                <div class="mb-3">
                  <label for="tel" class="form-label">Telephone</label>
                  <input type="number" class="form-control" name="tel" id="tel" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['tel']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="adresse" class="form-label">Adresse</label>
                  <textarea class="form-control" name="adresse" id="adresse" rows="2" placeholder="<?php echo $etudiant['adresse']; ?>"></textarea >
                </div>
                <div class="mb-3">
                  <label for="cne" class="form-label">CNE</label>
                  <input type="text" class="form-control" name="cne" id="cne" aria-describedby="helpId" placeholder="" value="<?php echo $etudiant['cne']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="etabliss" class="form-label">Etablissement</label>
                  <input type="text" class="form-control" name="etabliss" id="etabliss" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['etabliss']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>
                </div>
                <div class="mb-3">
                  <label for="anne_bac" class="form-label">Année d'obtention</label>
                  <input type="text" class="form-control" name="anne_bac" id="anne_bac" aria-describedby="helpId"
                    placeholder="" value="<?php echo $etudiant['anne_bac']; ?>">
                  <small id="helpId" class="form-text  fw-bold text-danger">Champs obligatoire</small>

                </div>
                <div class="mb-3">
                  <label for="filiere" class="form-label">Filieres</label>
                  <select class="form-select form-select-lg" name="id_filiere" id="filiere">
                    <?php foreach($filieres as $filiere){?>
                    <option value="<?php echo $filiere["id"];?>"> <?php echo "$filiere[libelle]";?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <button class="my-4 mx-auto btn btn-primary d-block w-25 text-light fw-bold" type="submit" name="submit">Envoyer</button>
        </div>
        </form>
               </div>

           </div>
       </div>
    </div>

 