<?php
class Admin {
    public static function loginAdmin($username) {
        $db = Db::connect();
        if($db ==null) {
            return ;
        }
        try {
            $sql = "SELECT * FROM admins WHERE :username = :username";
            $smt = $db->prepare($sql);
          $smt->execute([
             ':username' => $username,
          ]);
          $user = $smt->fetch(PDO::FETCH_OBJ);
          return $user;
        }catch(PDOException $ex) {
            echo 'erreur'.$ex->getMessage();
        }
        $smt = null;
        $db = null;
    }
    public static function addDate($debut,$fin) {

        $db = Db::connect();
    
        if($db == null) {
            return;
        }
    try {
        $sql = "INSERT INTO parametre (debut,fin) VALUES(:debut, :fin)";
        $smt = $db->prepare($sql);
        $smt->execute([
            ":debut" => $debut,
            ":fin" => $fin
        ]);
    }catch(PDOException $ex) {
        echo "erreur".$ex->getMessage();
    }
        $smt = null;
        $db = null;
    
     }
     public static function getDate() {
        $db = Db::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM parametre');

        $data = $query->fetch(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
}

?>