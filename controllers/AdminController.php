<?php

class AdminController{

        public function auth() {
            if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $result = Admin::loginAdmin($username);
                if($result->username === $_POST['username'] && $result->password === $_POST['password']) {
                    session_start();
                    $_SESSION['logged'] = true;
                    $_SESSION['username'] = $result->username;
                    $_SESSION['fullname'] = $result->fullname;
                    Redirect::to('candidats');
                }else {
                    
                    Session::status('danger','pseudo ou mot de passe est inncorect');
                    Redirect::to('loginAdmin');
                }
        }
        }
        public function index($page) {
            include('views/admin/'.$page.'.php');
        }
        public function logout(){
            session_destroy();
        }
        public function DateInscription() {
            if(isset($_POST['submit'])){
                $debut=$_POST['debut'];
                $fin=$_POST['fin'];
                Admin::addDate($debut, $fin);
           Session::status('success','Date défini avec success');
           Redirect::to('parametre');
        }
     
    }
    public function  getDateInscri(){
        $date = Admin::getDate();
        return $date;
    }
}