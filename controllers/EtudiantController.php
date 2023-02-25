<?php

class EtudiantController{
    public function getAllEtudiants() {
        $etudiants = Etudiant::getAll();
        return $etudiants;
    }
    public function getAdmisEtudiant() {
        $etudiants = Etudiant::getAdmis();
        return $etudiants;
    }
    public function getEtudiantsFiliere() {
        $filiere = Etudiant::GetEtudiantFiliere();
        return $filiere;
    }
    public function getAllEtudiantPays() {
        $pays = Etudiant::GetEtudiantPays();
        return $pays;
    }
    public function getAllEtudiantSerie() {
        $serie = Etudiant::GetEtudiantSerie();
        return $serie;
    }
    public function getOneEtudiant() {
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        $etudiant = Etudiant::getEtudiantById($id);
        return $etudiant;
    }
}
    
    public function storeEtudiant() {
       if(isset($_POST['submit'])){
               $nom=$_POST['nom'];
               $prenom=$_POST['prenom'];
               $email=$_POST['email'];
               $tel=$_POST['tel'];
               $ville=$_POST['ville'];
               $adresse=$_POST['adresse'];
               $id_pays=$_POST['id_pays'];
               $id_filiere=$_POST['id_pays'];
               $id_serie=$_POST['id_serie'];
               $cne=$_POST['cne'];
               $cin=$_POST['cin'];
               $note=$_POST['note'];
               $etabliss=$_POST['etabliss'];
               $sexe=$_POST['sexe'];
               $anne_bac=$_POST['anne_bac'];
               $date_naiss=$_POST['date_naiss'];
               $password=$_POST['password'];
               $image=$this->uploadPhoto();
               $count = Etudiant::getEtudiant($email);
               if($count=='2'){
                 $post = '2'; 
                 if(isset($post) && $post == '2'){
                    Session::status('danger','Desolé vous avez deja envoyer 2 postualtion');
                    Redirect::to('register');
                   }  
               }else{
                if($count=='1'){
                    $data = Filiere::getFiliere();
                    if($data['id']==$id_filiere){
                        $choix = '1';
                        if(isset($choix) && $choix == '1'){
                            Session::status('danger','Desolé vous avez deja choisi cette filiere avant');
                            Redirect::to('register');
                           }
                    }else{
                        Etudiant::addEtudiant($nom, $prenom, $email, $tel, $ville, $adresse, $cne,$cin,$id_pays,$id_serie,$id_filiere,$note,$etabliss,$sexe,$anne_bac,$image,$date_naiss,$password);
                        Session::status('success','votree information sont envoyés  avec success');
                        Redirect::to('informationSend');
                    }
                }else{
                    Etudiant::addEtudiant($nom, $prenom, $email, $tel, $ville, $adresse, $cne,$cin,$id_pays,$id_serie,$id_filiere,$note,$etabliss,$sexe,$anne_bac,$image,$date_naiss,$password);
                    Session::status('success','votree information sont envoyés  avec success');
                    Redirect::to('informationSend');
                }
               }
          
       }
     
     
    }
    public function modifierEtudiant() {
        if(isset($_POST['submit'])) {
               $id=$_POST['id'];
               $nom=$_POST['nom'];
               $prenom=$_POST['prenom'];
               $email=$_POST['email'];
               $tel=$_POST['tel'];
               $ville=$_POST['ville'];
               $adresse=$_POST['adresse'];
               $id_pays=$_POST['id_pays'];
               $id_filiere=$_POST['id_pays'];
               $id_serie=$_POST['id_serie'];
               $cne=$_POST['cne'];
               $cin=$_POST['cin'];
               $note=$_POST['note'];
               $etabliss=$_POST['etabliss'];
               $sexe=$_POST['sexe'];
               $anne_bac=$_POST['anne_bac'];
               $date_naiss=$_POST['date_naiss'];
               $password=$_POST['password'];
               $image=$this->uploadPhoto();
               Etudiant::updateEtudiant($id,$nom, $prenom, $email, $tel, $ville, $adresse, $cne,$cin,$id_pays,$id_serie,$id_filiere,$note,$etabliss,$sexe,$anne_bac,$image,$date_naiss,$password);
               Session::status('success','votre informations sont modifiés avec success');
               Redirect::to('home');

        }
    }
    public function EtudiantAdmis() {
        if(isset($_POST['submit'])){
            $id=$_POST['id'];
               Etudiant::EtatAdmis($id);
               Session::status("success","l'etudiant est admis  avec success");
               Redirect::to('candidats');
        }
               

    }
    public function EtudiantReffuse() {
      
               $id=$_POST['id'];
              
               Etudiant::EtatReffuse($id);
               Session::status("success","l'etudiant est refusé");
               Redirect::to('candidats');
    }
    public function uploadPhoto($olImage=null){
        $dir = $_FILES['image']['tmp_name'];
        $dossierSite ='public/images/avatars/'.$_FILES['image']['name'];
        $deplacer =move_uploaded_file($dir,$dossierSite); 
    if($deplacer){
        return $_FILES['image']['name'];
    }
    return $olImage;

}
public function findEtudiant() {
    if(isset($_POST['search'])) {
        $search = $_POST['search'];
       return  Etudiant::searchEtudiant($search);
    }

   }


public function getAllPays() {
    $pays = Etudiant::getAllPays();
    return $pays;
}
public function getAllSeries() {
    $series = Etudiant::getAllSeries();
    return $series;
}
public function auth() {
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $result = Etudiant::loginEtudiant($email,$password);
        if($result->email === $_POST['email'] && $result->password === $_POST['password']) {
            $_SESSION['etudiant'] = true;
            $_SESSION['email'] = $result->email;
            $_SESSION['nom'] = $result->nom;
            $_SESSION['prenom'] = $result->prenom;
            $_SESSION['image'] = $result->image;
            return $result;
            Redirect::to('updateEtudiant');
        }else {
            
            Session::status('danger','pseudo ou mot de passe est inncorect');
            Redirect::to('login');
        }



   
}
}   
   public function EstConnecter(){
    if(isset($_SESSION['id'])){
      $user =  Etudiant::GetEtudiantConnecter();
        return $user;
        Redirect::to('updateEtudiant');
    }
   }
}
?>
