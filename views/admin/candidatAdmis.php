<?php
if(isset($_POST['id'])) {
    $data = new EtudiantController();
     $data->EtudiantAdmis();;
     Redirect::to('candidats');
}
?>