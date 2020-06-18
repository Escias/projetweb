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
    require '../back/json.php';
?>

<section>
    <article>
        
        <?php
        echo '<h3>CHECK</h3>';
        if (file_exists("keeplog.json")){
            $req = new request('root', 'root', 'test', 'mysql', 'localhost');
            $json = new json();
            $json->extractJSON('../front/keeplog.json');
            $check = $req->getValue($req->getRows('Codingmusic_Tracks',array('Link'),"'".'2'."'", 'ID'));
            $toPlay = str_replace("https://www.youtube.com/watch?v=", "", $check[0]);
            echo '<iframe src="https://www.youtube.com/embed/'. $toPlay . '" frameborder="0" allowfullscreen></iframe>';
        }
        ?>
    </article>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script language="javascript">
        $(function(){
            function loadNum()
            {
                $.ajax({
                    url : "/projet/back/checkdata.php",
                    type : "POST",
                    success : function(response){
                        console.log(response);
                    }
                });
                setTimeout(loadNum, 1000);
            }
            loadNum();
        });
    </script>
</section>
<?php
    include 'footer.php';
?>
</body>
</html>
