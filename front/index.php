<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>SteelRoad</title>
</head>
<body>
<!--include and execute indicated files.-->
<?php
require '../back/database.php';
require '../back/json.php';
    include 'header.php';
?>

<section>
    <article>
        <!--verify if the json file exist-->
        <!--extract the youtube's link and keep only the video id-->
        <!--display the video with "iframe"-->
        <?php
        echo '<h3>CHECK</h3>';
        if (file_exists("keeplog.json")){
            $req = new request('minesr_44703', 'TbhV1zzZ', 'minesr_44703', 'mysql', '178.32.113.35:3306');
            $json = new json();
            $user = $json->extractJSON('../front/keeplog.json');
            $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('Link'),"'".'2'."'", 'ID'));
            $toPlay = str_replace("https://www.youtube.com/watch?v=", "", $check[0]);
            echo '<iframe src="https://www.youtube.com/embed/'. $toPlay . '" frameborder="0" allowfullscreen></iframe>';
        }
        ?>
    </article>
    <div id="content"></div>
</section>
<?php
    include 'footer.php';
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--call the "checkdata.php" file every second and display it.-->
<script language="javascript">
    $(function(){
        function loadNum()
        {
            $('#content').load('../back/checkdata.php');
            setTimeout(loadNum, 1000);
        }
        loadNum();
    });
</script>
</body>
</html>
