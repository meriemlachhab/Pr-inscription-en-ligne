<?php
class Filiere {
    public static function getAllFiliere() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM filiere');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
    public static function getFiliere() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM filiere');
        $data = $query->fetch(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
    public static function getFiliereById($id) {
        $db = Db::connect();

        if($db == null) {
            return;
        }
        try {
        $sql = "SELECT * FROM filiere WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":id" => $id
        ]);

        $data = $smt->fetch(PDO::FETCH_OBJ);
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

  public static function addFiliere($libelle) {

    $db = Db::connect();

    if($db == null) {
        return;
    }
try {
    $sql = "INSERT INTO filiere (libelle) VALUES (:libelle)";
    $smt = $db->prepare($sql);
    $smt->execute([
        ":libelle" => $libelle,
        
    ]);
}catch(PDOException $ex) {
    echo "erreur".$ex->getMessage();
}
    $smt = null;
    $db = null;

 }
 public static function updateFiliere($id, $libelle) {
    $db = Db::connect();
    if($db == null) {
        return ;
    }
    try {
        $sql = "UPDATE filiere SET libelle = :libelle WHERE id = :id";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":id" =>$id,
            ":libelle" => $libelle,
        ]);
    }catch(PDOException $ex) {
        echo 'erreur'.$ex->getMessage();
    }
    $smt = null;
    $db = null;
}
public static function deleteFiliere($id) {
  
    $db = Db::connect();

    if($db == null) {
        return;
    }

    $sql = "DELETE FROM filiere WHERE id = :id";

    $smt = $db->prepare($sql);

    $smt->execute([
        ":id" => $id
    ]);

    $smt = null;
    $db = null;
}

}
?>