<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <title>SteelRoad</title>
</head>
<body>
<?php
include 'header.php';
require '../back/autoform.php';
require '../back/database.php';
require '../back/json.php';
?>
<section>
    <article>
        <div class = "login">
        <h1>Test Log</h1>
        <form method="POST" action="#">
            <?php
            $form = new autoform();
            $log = new json();
            $req = new request('minesr_44703', 'TbhV1zzZ', 'test', 'mysql', '178.32.113.35:3306');
            $form->getInputText('Username', 'username');
            $form->getInputPassword('Password', 'password');
            $form->getInputSubmit('Connection');
            if (!empty($_POST)){
                $check = $req->getValue($req->getRows('codingmusic_web_users', array('NickName', 'PassWord'), "'".$_POST['username']."'", 'NickName'));
                if ($check[0]==$_POST['username'] && $check[1]==$_POST['password']){
                    $username = $check[0];
                    $log->createJSON('keeplog.json', array($username));
                    echo '<p>'.$username.'</p>';
                    header("Location: ../front/index.php");
                    exit;
                }else{
                    echo 'username or password incorrect';
                }
            }
            ?>
            <p>pas encore inscrit ?</p>
            <a href="/projetweb/front/register.php"><h3>S'inscrire</h3></a>
        </form>
        </div>
    </article>
</section>
<?php
    include 'footer.php';
?>
</body>
</html>
