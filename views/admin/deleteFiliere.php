<?php
if(isset($_POST['id'])) {
    $data = new FiliereController();
     $data->supprimerFiliere();
     Redirect::to('filiere');
}
?>
