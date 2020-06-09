<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>SteelRoad</title>
</head>
<body>
<?php
include 'header.php';
require '../back/autoform.php';
require '../back/database.php';
?>
<section>
    <article>
        <h1>Test Log</h1>
        <form method="POST" target="_blank">
            <?php
            $form = new autoform();
            //$req = new request('minesr_44703', 'TbhV1zzZ', 'ok', 'mysql', '178.32.113.35:3306');
            $form->getInputText('Username', 'username');
            $form->getInputPassword('Password', 'password');
            $form->getInputSubmit('Connection');
            ?>
            <p>pas encore inscrit ?</p>
            <a href="/projetweb/front/register.php"><h3>S'inscrire</h3></a>
        </form>
    </article>
</section>
<?php
    include 'footer.php';
?>
</body>
</html>
