<?php
if(isset($_POST['id'])) {
    $data = new EtudiantController();
     $data->EtudiantReffuse();;
     Redirect::to('candidats');
}
?>