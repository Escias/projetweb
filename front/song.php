<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="song.css">
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
        <h1>Test Log</h1>
        <form method="POST" action="#">
        <?php
            $req = new request('root', 'root', 'projetweb', 'mysql', 'localhost');
            $check = $req->getValue($req->getRows('Youtube',array('code'),"'".'1'."'", 'id'));
            echo '<iframe src="https://www.youtube.com/embed/'.$check[0]. '" frameborder="0" allowfullscreen></iframe>';
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
