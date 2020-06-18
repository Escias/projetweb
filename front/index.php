<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>SteelRoad</title>
</head>
<body>

<?php
require '../back/database.php';
require '../back/json.php';
    include 'header.php';
?>

<section>
    <article>
        
        <?php
        echo '<h3>CHECK</h3>';
        if (file_exists("keeplog.json")){
            $req = new request('minesr_44703', 'TbhV1zzZ', 'test', 'mysql', '178.32.113.35:3306');
            $json = new json();
            $user = $json->extractJSON('../front/keeplog.json');
            $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('Link'),"'".'2'."'", 'ID'));
            $toPlay = str_replace("https://www.youtube.com/watch?v=", "", $check[0]);
            echo '<iframe src="https://www.youtube.com/embed/'. $toPlay . '" frameborder="0" allowfullscreen></iframe>';
        }
        ?>
    </article>
</section>
<?php
    include 'footer.php';
?>
</body>
</html>
