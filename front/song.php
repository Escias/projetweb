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
            <h1>Test Song</h1>
            <form method="POST" action="#">
            </form>
        </div>

        <div id="ytplayer"></div>

    </article>
</section>
<?php
include 'footer.php';
?>
</body>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="javascript">


    console.log("BONJOUR");
    <?php $test = 'SAUCISSE';
    var_dump($test); ?>


    var request = new XMLHttpRequest();
    request.onload = function() {
        var ytbID = this.responseText;
    };
    request.open(get, trackIDRequest.php, true);
    request.send();
</script>

<script language="javascript">
    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScript
    Tag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Replace the 'ytplayer' element with an <iframe> and
    // YouTube player after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer', {
            height: '360',
            width: '640',
            videoId: 'wKj2lkXgCIw',
            playerVars: {
                autoplay: 1,
                loop: 1
            }
        });
    }
</script>

</html>