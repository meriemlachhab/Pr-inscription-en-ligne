<?php
class Db{
public static function connect() {
    $db = new PDO("mysql:host=localhost;dbname=preinscription","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $db;
}
}
?>