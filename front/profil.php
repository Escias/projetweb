<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
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
        <div class = "login">
            <h1>Test profil</h1>
            <div>
                <div class="prob">
                    <input type="submit" value="Générale" onclick="test()">
                    <input type="submit" value="Securité" onclick="security()">
                </div>
                <div id="info">

                </div>
            </div>
            <form method="POST" target="_blank">

            </form>
        </div>
    </article>
</section>
<?php
include 'footer.php';
?>
<script>

    function test(){
        console.log('run work');
    }

    function general() {
        document.getElementById("info").innerHTML = <?php
        $form = new autoform();
        $req = new request('minesr_44703', 'TbhV1zzZ', 'test', 'mysql', '178.32.113.35:3306');
        $json = new json();
        $user = $json->extractJSON('../front/keeplog.json');
        $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('NickName', 'Mail_Adress', 'profilimg', 'PassWord'),"'".$user[0]."'", 'NickName'));
        echo '<img src="'.$check[2].'" alt="image de profil">';
        echo '<h3> Pseudo : '.$check[0].'</h3>';
        echo '<p> Mail : '.$check[1].'</p>'
        ?>;
    }

    function security() {
        document.getElementById("info").innerHTML = <?php
        $form = new autoform();
        $req = new request('minesr_44703', 'TbhV1zzZ', 'test', 'mysql', '178.32.113.35:3306');
        $json = new json();
        $user = $json->extractJSON('../front/keeplog.json');
        $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('NickName', 'Mail_Adress', 'profilimg', 'PassWord'),"'".$user[0]."'", 'NickName'));
        echo '<form method="POST" action="#">';
        $form->getInputPassword('Password', 'oldpassword');
        $form->getInputPassword('Password', 'newpassword1');
        $form->getInputPassword('Password', 'newpassword2');
        $form->getInputSubmit('Valider');
        if(!empty($_POST)){
            if($_POST['oldpassword'] == $check[3]){
                if($_POST['newpassword1'] == $_POST['newpassword2']){
                    $req->getUpdate('codingmusic_web_users', $_POST['newpassword1'], 'PassWord');
                }else{
                    echo '<p>Mot de passe invalide</p>';
                }
            }else{
                echo '<p>Mot de passe invalide</p>';
            }
        }else{
            echo '<p>Veuillez remplir les champs avant de valider</p>';
        }
        echo '</form>'
        ?>;
    }
</script>
</body>
</html>