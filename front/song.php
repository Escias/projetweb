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
            $req = new request('root', 'root', 'test', 'mysql', 'localhost');
            $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('Link'),"'".'2'."'", 'ID'));
            var_dump($toPlay = str_replace("https://www.youtube.com/watch?v=", "", $check[0]));
            echo '<iframe src="https://www.youtube.com/embed/'. $toPlay . '" frameborder="0" allowfullscreen></iframe>';
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
