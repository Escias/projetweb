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
    require '../back/database.php';
?>
<section>
    <article>
        <form method="POST" action="#">
            <?php
            $req = new request('root', 'root', 'test', 'mysql', 'localhost');

            $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('Link'),"'".'2'."'", 'ID'));
            $toPlay = str_replace("https://www.youtube.com/watch?v=", "", $check[0]);
            echo '<iframe src="https://www.youtube.com/embed/'. $toPlay . '" frameborder="0" allowfullscreen></iframe>';
            ?>
        </form>
    </article>
</section>
<?php
    include 'footer.php';
?>
</body>
</html>
