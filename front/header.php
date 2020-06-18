<header>
    <div class="head">
        <div>
			<a href="/projetweb/front/index.php"><h1>SteelRoad</h1></a>
        </div>
        <?php
        if (file_exists("keeplog.json")){
            echo "<div class=\"logb\">
                    <a href=\"/projetweb/front/profil.php\" class=\"log\">Profile</a>
                    <a href=\"/projetweb/front/index.php\" onclick='disconnect()' class=\"log\">Deconnexion</a>
                </div>";
        }else{
            echo "<div class=\"logb\">
                    <a href=\"/projetweb/front/login.php\" class=\"log\">Sign-In</a>
                </div>";
        }
        ?>
    </div>
</header>