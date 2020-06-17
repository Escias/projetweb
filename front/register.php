<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
<?php
include 'header.php';
require '../back/autoform.php';
require '../back/database.php';
?>
<section>
    <article>
        <div class = "register">
        <h1>Register</h1>
        <form method="POST" action="#">
            <?php
            $form = new autoform();
            $req = new request('root', 'root', 'test', 'mysql', 'localhost');
            $form->getInputText('Username', 'username');
            $form->getInputText('Mail','mail');
            $form->getInputPassword('Password', '1password');
            $form->getInputPassword('Password', '2password');
            $form->getInputSubmit('Connection');
            if(!empty($_POST)){
                if($_POST['1password'] == $_POST['2password']){
                    $req-> Insert('codingmusic_web_users', array ("'".$_POST['username']."'","'".$_POST['mail']."'","'". $_POST['1password'] ."'","default"));
                }else{
                    echo('Ton mot de passe est incorrect');
                }
            }
            ?>
            
        </form>
        </div>
    </article>
</section>
<?php
    include 'footer.php';
?>
</body>
</html>
