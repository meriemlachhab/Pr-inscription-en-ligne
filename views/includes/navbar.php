<?php
$admin = new AdminController();
$dateInsr = $admin->getDateInscri();
?>
<div class=" container-menu position-sticky">
            <div class="logo-box mt-2">
                <a href="/">
                    <img src="public/images/ecampuscests-Tr.png" width="60px" height="60px">
                </a>
            </div>
            <nav class="menu-bar">
                <ul>
                    <li><a href="">Acceuil</a></li>
                    <li><a href="">Formations</a></li>
                    <li><a href="">Espace Etudiant</a></li>
                    <li><a href="">Espace assoiciatif</a></li>
                   <?php if(isset($_SESSION['etudiant']) && $_SESSION['etudiant'] === true) { ?>
                    <li><a href="<?php echo BASE_URL ;?>logout"><?php echo $_SESSION['email'] ?><span class="text-black"></span> DECONNECTER</a></li>
                    <?php }else{ ?>
                    <li><a href="<?php echo BASE_URL ;?>login">se connecter</a></li> 
                    <?php }?>

                    <?php
                     $dateActuelle = date('d/m/Y');
                      $dateDebut =date('d/m/Y',strtotime($dateInsr['debut']));
                      $dateFin =date('d/m/Y',strtotime($dateInsr['debut']));
                      if($dateActuelle >=  $dateDebut && $dateActuelle <= $dateFin) {
                    ?>
                     <li><a href="<?php echo BASE_URL ;?>register">INSCRIPTION EN LIGNE</a></li>
                     <?php } ?>
                </ul>
            </nav>
        </div>