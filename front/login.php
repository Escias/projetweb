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
require '../back/log.php';
?>
<section>
    <article>
        <div class = "login">
        <h1>Test Log</h1>
        <form method="POST" action="#">
            <?php
            $form = new autoform();
            $req = new request('root', 'root', 'projetweb', 'mysql', 'localhost');
            $form->getInputText('Username', 'username');
            $form->getInputPassword('Password', 'password');
            $form->getInputSubmit('Connection');
            if (!empty($_POST)){
                $check = $req->getValue($req->getRows(user_data, array('username', 'password'), "'".$_POST['username']."'", 'username'));
                if ($check[0]==$_POST['username'] && $check[1]==$_POST['password']){
                    $log = new log($check[0]);
                    header("../front/index.php");
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
