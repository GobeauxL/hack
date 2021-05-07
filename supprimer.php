<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
			$token = bin2hex(random_bytes(30));
            $_SESSION["token"] = $token;
			if(isset($_GET["pseudo"]) && isset($_SESSION["admin"]) && isset($_GET["token"]) &&  $_GET["token"] = $_SESSION["token"]){
                $data = parse_ini_file("config.ini"); 
                $pdo = new \PDO("mysql:host=".$data["host"].";dbname=tphack;port=3306", $data["user"], $data["password"]);
                $sql = "DELETE FROM user WHERE pseudo = '".$_GET["pseudo"]."'";
                $res = $pdo->query($sql);

                echo "L'utilisateur ".$_GET["pseudo"]." a été supprimé !";
            }

            if(isset($_POST["connect"])) {
                $_SESSION["admin"] = true;
            }

            if(isset($_POST["deconnect"])) {
                unset($_SESSION["admin"]);
            }

            if(!(isset($_SESSION["admin"]))) {
        ?>
        <form action="" method="POST">
            <input type="submit" name="connect" value="Se connecter en tant qu'administrateur" />
        </form>
        <?php
            }
            else {
        ?>
        <form action="" method="GET">
            <input type="text" name="pseudo" placeholder="Tapez le nom du pseudo de la personne à supprimer" />
            <input type="submit" name="ok" value="OK" />
            <br/><br/>
        </form>
        <form action="" method="POST">
			<input type="hidden" name="token" value=<?php echo '"'.$token.'"'?>/>
            <input type="submit" name="deconnect" value="Déconnexion" />
        </form>
        <?php
            }
        ?>
    </body>
</html>