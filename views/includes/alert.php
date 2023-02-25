<?php
if(isset($_COOKIE['success'])) {
    echo '<div class="alert alert-success" role="alert">
    <strong>'.$_COOKIE['success'].'</strong></div>'; 
}
if(isset($_COOKIE['error'])) {
    echo '<div class="alert alert-error" role="alert">
    <strong>'.$_COOKIE['error'].'</strong></div>'; 
}
if(isset($_COOKIE['info'])) {
    echo '<div class="alert alert-info" role="alert">
    <strong>'.$_COOKIE['info'].'</strong></div>'; 
}
if(isset($_COOKIE['danger'])) {
    echo '<div class="alert alert-danger" role="alert">
    <strong>'.$_COOKIE['danger'].'</strong></div>'; 
}

?>

