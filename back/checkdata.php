<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//echo "<script> console.log('run') </script>";
$dbType = 'mysql';
$dbName = 'test';
$dbAdress = 'localhost';
$user = 'root';
$pwd = 'root';
$bdd = null;
try {
    if ($bdd === null) {
        $dsn = $dbType . ':dbname=' . $dbName . ';host=' . $dbAdress;

        $bdd = new PDO($dsn, $user, $pwd);
    }
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die();
}
$val = array();
$count=0;
$value = '';
$sql = "SELECT Is_Online FROM codingmusic_ig_users WHERE NickName= 'Rosstail';";
$bdd->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$tab = $bdd->query($sql);
foreach ($tab as $rslt){
    $val[]=$rslt;
}
$check = array();
foreach ($val as $value){
    foreach ($value as $item){
        $check[]=$item;
    }
}
echo "<p>".$check[0]."</p>";