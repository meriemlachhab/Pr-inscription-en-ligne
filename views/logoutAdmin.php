<?php
  $logout = new AdminController();
  $logout->logout();
Redirect::to('loginAdmin');
?>