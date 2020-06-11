<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet">
    <title>Register</title>
</head>
<body>
<?php
require '../back/autoform.php';
require '../back/database.php';
?>
<section>
    <article>
        <h1>Register</h1>
        <form method="POST" action="#">
            <?php
            $form = new autoform();
            $req = new request('root', 'root', 'Projetweb', 'mysql', 'localhost');
            $form->getInputText('Username', 'username');
            $form->getInputText('Mail','mail');
            $form->getInputPassword('Password', '1password');
            $form->getInputPassword('Password', '2password');
            $form->getInputSubmit('Connection');
            if(!empty($_POST)){
                if($_POST['1password'] == $_POST['2password']){
                    echo 'theo est baeau';
                    $req-> Insert('Profil', array ("'".$_POST['username']."'","'".$_POST['mail']."'","'". $_POST['1password'] ."'") );
                }else{
                    echo('Ton mot de passe est incorrect');
                }
            }
            ?>
            
        </form>
    </article>
</section>
</body>
</html>
