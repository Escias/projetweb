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
            $req = new request('minesr_44703', 'TbhV1zzZ', 'minesr_44703', 'mysql', '178.32.113.35:3306');
            $form->getInputText('Username', 'username');
            $form->getInputText('Mail','mail');
            $form->getInputPassword('Password', '1password');
            $form->getInputPassword('Password', '2password');
            $form->getInputSubmit('Valider');
            if(!empty($_POST)){
                if($_POST['1password'] == $_POST['2password']){
                    if (preg_match("/[aA0-zZ9]{3}\@[aA0-zZ9]{1,}\.[aA-zZ]/", $_POST["mail"])){
                        $req-> Insert('codingmusic_web_users', array ("'".$_POST['username']."'","'".$_POST['mail']."'","'". $_POST['1password'] ."'","default"));
                        header("../front/login.php");
                        exit;
                    }else{
                        echo '<p>Entrer une adresse mail valide</p>';
                    }
                }else{
                    echo '<p>Mot de passe est incorrect</p>';
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
