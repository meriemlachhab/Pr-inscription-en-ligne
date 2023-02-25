<?php
require_once('autoload.php');
require_once('views/includes/header.php');
require_once('controllers/HomeController.php');
$home = new HomeController();
$pages = ['home','register','logoutAdmin','filiere','candidats','loginAdmin','admin','addFiliere','updateFiliere','deleteFiliere', 'updateEtudiant','login','logout','404','informationSend','updateCandidat','candidatAdmis', 'candidatReffuse','parametre','listeAdmis','Export'];
if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page==='candidats' || $page==='filiere' || $page==='parametre' || $page==='admin'||$page==='addFiliere' || $page ==='deleteFiliere' || $page==='updateFiliere' || $page==='updateCandidat' || $page === 'candidatAdmis' || $page === 'candidatReffuse' || $page === 'listeAdmis'){
          if(isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
            $admin = new AdminController();
            $admin->index($page);
        }else{
          $home->index('loginAdmin');
        }

      }else{
      $home->index($page);

    }
  }else
  $home->index('404');
  
  }else{
    $home->index('home');
  }
require_once('views/includes/footer.php');

?>