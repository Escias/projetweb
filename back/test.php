<?php

require 'projetweb/back/json.php';
$json = new json();
if (isset($_GET['action']) && $_GET['action'] == 'dinesh') {
    $json->deleteJSON('../front/keeplog.json');
    header("Location: ../front/index.php");
    exit;
}
