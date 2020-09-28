<?php
/*
db_connect.php
definierar variblar:
*/

$host = "localhost";
$user = "user";
$pass = "user";
$db = "PHP-MySQL-ovn-1";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // ställer PDO felmeddelanden
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Databaskontakten lyckades!";
}
catch(PDOException $e) {
    echo "Databaskontakten misslyckades: " . $e->getMessage();
}
?>
