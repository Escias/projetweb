<header>
    <div class="head">
        <div>
            <a href="/projetweb/front/index.php"><h1>SteelRoad</h1></a>
        </div>
        <?php
        if (file_exists("keeplog.json")){
            echo "<div class=\"logb\">
                    <a href=\"/projetweb/front/profil.php\" class=\"log\">Profile</a>
                    <form action=\"../front/index.php\" method=\"post\">
    <input type=\"submit\" name=\"someAction\" value=\"Disconnect\" />
</form>
                </div>";
        }else{
            echo "<div class=\"logb\">
                    <a href=\"/projetweb/front/login.php\" class=\"log\">Sign-In</a>
                </div>";
        }
        ?>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func()
    {
        unlink("../front/keeplog.json");
    }
    ?>
</header>