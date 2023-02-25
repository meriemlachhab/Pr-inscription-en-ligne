<?php
class FiliereController {
    public function getAllFilieres() {
        $fileres = Filiere::getAllFiliere();
        return $fileres;
    }
    public function getOneFiliere() {
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        $filiere = Filiere::getFiliereById($id);
        return $filiere;
    }
}
    public function storeFiliere() {
        if(isset($_POST['submit'])){
            $libelle=$_POST['libelle'];
            Filiere::addFiliere($libelle);
            Session::status('success','la filiere est bien Ajouté  avec success');
            Redirect::to('filiere');
 
 
           
        }
     }
     public function modifierFiliere() {
        if(isset($_POST['submit'])) {
               $id=$_POST['id'];
               $libelle=$_POST['libelle'];
              
               Filiere::updateFiliere($id, $libelle);
               Session::status('success','Filiere modifiée avec success');
               Redirect::to('filiere');

        }
    }
    public function supprimerFiliere() {
        if(isset($_POST['id'])){
            $id=$_POST['id'];
         Filiere::deleteFiliere($id);
         Session::status('danger','Filiere supprimé');
         Redirect::to('filiere');

        }
    }
}





?>