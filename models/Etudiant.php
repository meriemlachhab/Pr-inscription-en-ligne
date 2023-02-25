<?php
class Etudiant {
   
    public static function getAll() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM etudiants');

        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
    public static function getEtudiant($email) {
        $db = Db::connect();

        if($db == null) {
            return;
        }
        $sql = $db->prepare('select count(*) from etudiants where email=:email');
        $sql->execute([":email" =>$email]);
        $data = $sql->fetchColumn();

        return $data;
    }
    public static function getAdmis() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM etudiants WHERE etat = 1');

        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
    
    public static function getAllPays() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM pays');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
    public static function getAllSeries() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM serie_bac');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
    public static function addEtudiant($nom, $prenom, $email, $tel, $ville, $adresse, $cne,$cin,$id_pays,$id_serie,$id_filiere,$note,$etabliss,$sexe,$anne_bac,$image,$date_naiss, $password) {

        $db = Db::connect();
 
        if($db == null) {
            return;
        }
        
    try {
        $sql = "INSERT INTO etudiants (nom, prenom, email, tel, ville, adresse, cne,cin,id_pays,id_serie,id_filiere,note,etabliss,sexe,anne_bac,image,date_naiss,password) VALUES (:nom, :prenom, :email, :tel, :ville, :adresse, :cne,:cin,:id_pays,:id_serie,:id_filiere,:note,:etabliss,:sexe,:anne_bac,:image,:date_naiss,:password)";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":adresse" => $adresse,
            ":cne" => $cne,
            ":cin" => $cin,
            ":tel" => $tel,
            ":id_pays" => $id_pays,
            ":id_filiere" => $id_filiere,
            ":id_serie" => $id_serie,
            ":etabliss" => $etabliss,
            ":anne_bac" => $anne_bac,
            ":image" => $image,
            ":sexe" => $sexe,
            ":note" => $note,
            ":ville" => $ville,
            ":date_naiss" => $date_naiss,
            ":password" => $password,
        ]);
    }catch(PDOException $ex) {
        echo "erreur".$ex->getMessage();
    }
        $smt = null;
        $db = null;
 
     }
     public static function getEtudiantById($id) {
        $db = Db::connect();

        if($db == null) {
            return;
        }
        try {
        $sql = "SELECT * FROM etudiants WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":id" => $id
        ]);

        $data = $smt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $ex) {
            echo "erreur".$ex->getMessage();
        }
        $smt = null;
        $db = null;

        if(!$data) {
            return "Data not found 404";
        }

        return $data;
    }
    public static function updateEtudiant($id,$nom, $prenom, $email, $tel, $ville, $adresse, $cne,$cin,$id_pays,$id_serie,$id_filiere,$note,$etabliss,$sexe,$anne_bac,$image,$date_naiss, $password) {
        $db = Db::connect();
        if($db == null) {
            return ;
        }
        try {
            $sql = "UPDATE etudiants SET nom=:nom,prenom=:prenom,email=:email,tel=:tel,ville=:ville, adresse=:adresse,date_naiss=:date_naiss,cne=:cne,cin=:cin,id_pays=:id_pays,id_serie=:id_serie,id_filiere=:id_filiere,note=:note,etabliss=:etabliss,sexe=:sexe,image=:image, password=:password,anne_bac=:anne_bac WHERE id=:id";
            $smt = $db->prepare($sql);
            $smt->execute([
                ":id" => $id,
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":email" => $email,
                ":adresse" => $adresse,
                ":cne" => $cne,
                ":cin" => $cin,
                ":tel" => $tel,
                ":id_pays" => $id_pays,
                ":id_filiere" => $id_filiere,
                ":id_serie" => $id_serie,
                ":etabliss" => $etabliss,
                ":anne_bac" => $anne_bac,
                ":image" => $image,
                ":sexe" => $sexe,
                ":note" => $note,
                ":ville" => $ville,
                ":date_naiss" => $date_naiss,
                ":password" => $password
            ]);
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }
    public static function deleteEmploye($id) {
      
        $db = Db::connect();

        if($db == null) {
            return;
        }
 
        $sql = "DELETE FROM employe WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":id" => $id
        ]);
 
        $smt = null;
        $db = null;
    }
 
    public static function searchEtudiant($search) {
        $db = Db::connect();
        if($db == null) {
            return ;
        }
        try {
            $sql = "SELECT * FROM etudiants WHERE nom LIKE ? OR prenom LIKE ? ";
            $smt = $db->prepare($sql);
            $smt->execute(array('%'.$search.'%','%'.$search.'%'));
            $employe = $smt->fetchAll();
            return $employe;
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }

    public static function GetEtudiantConnecter() {
        $db = Db::connect();
        if($db ==null) {
            return ;
        }
        try {
            $sql =$db->query("SELECT * FROM etudiants WHERE id=?") ;
            // $smt = $db->prepare($sql);
          array($_SESSION['id']);
          $user = $sql->fetch(PDO::FETCH_ASSOC);
          return $user;
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }
    public static function loginEtudiant($email,$password) {
        $db = Db::connect();
        if($db ==null) {
            return ;
        }
        try {
            $sql = "SELECT * FROM etudiants WHERE email=:email AND password=:password" ;
            $smt = $db->prepare($sql);
          $smt->execute([
             ':email' => $email,
             ':password' => $password
          ]);
          $user = $smt->fetch(PDO::FETCH_OBJ);
          return $user;
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }
    public static function GetEtudiantFiliere(){
        $db = Db::connect();

        if($db == null) {
            return;
        }
        $req = $db->query('select * from  etudiants');
        while($data = $req->fetch()){
          $filiere = $data['id_filiere'];
          $req2 = $db->query("select * from  filiere where id=$filiere");
          $data = $req2->fetch();
          return $data;
        
        }
    }
    public static function GetEtudiantSerie(){
        $db = Db::connect();

        if($db == null) {
            return;
        }
        $req = $db->query('select * from  etudiants');
        while($data = $req->fetch()){
          $serie = $data['id_serie'];
          $req2 = $db->query("select * from  serie_bac where id=$serie");
          $data = $req2->fetch();
          return $data;
        
        }
    }
    public static function GetEtudiantPays(){
        $db = Db::connect();

        if($db == null) {
            return;
        }
        $req = $db->query('select * from  etudiants');
        while($data = $req->fetch()){
          $pays = $data['id_pays'];
          $req2 = $db->query("select * from  pays where id=$pays");
          $data = $req2->fetch();
          return $data;
        
        }
    }
    public static function EtatAdmis($id) {
        $db = Db::connect();
        if($db == null) {
            return ;
        }
        try {
            $sql = "UPDATE etudiants SET etat = 1 WHERE id = :id";
            $smt = $db->prepare($sql);
            $smt->execute([
                ":id" => $id
            ]);
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }
    public static function EtatReffuse($id) {
        $db = Db::connect();
        if($db == null) {
            return ;
        }
        try {
            $sql = "UPDATE etudiants SET etat = 0 WHERE id = :id";
            $smt = $db->prepare($sql);
            $smt->execute([
                ":id" => $id
            ]);
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }
}


?>