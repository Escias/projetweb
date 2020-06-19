<?php
require '../back/json.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*indicate user and ip of the database*/
$dbType = 'mysql';
$dbName = 'minesr_44703';
$dbAdress = '178.32.113.35:3306';
$user = 'minesr_4470';
$pwd = 'TbhV1zzZ';
$bdd = null;
/*try connection to the database*/
try {
    if ($bdd === null) {
        $dsn = $dbType . ':dbname=' . $dbName . ';host=' . $dbAdress;

        $bdd = new PDO($dsn, $user, $pwd);
    }
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die();
}
/*extract content of json file in $value*/
$json = new json();
$value = $json->extractJSON('../front/keeplog.json');
$val = array();
$count=0;
$value = '';
$sql = "SELECT Is_Online FROM codingmusic_ig_users WHERE NickName= '".$value[0]."';";
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