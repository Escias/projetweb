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
                    <button>générale</button>
                    <button>sécurité</button>
                    <button>déconnexion</button>
                </div>
                <div>
                    <form action="">
                        <?php
                        $req = new request('root', 'root', 'projetweb', 'mysql', 'localhost');
                        ?>
                    </form>
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
</body>
</html>