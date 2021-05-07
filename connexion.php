<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST["user"]) && isset($_POST["password"])) {
                $data = parse_ini_file("config.ini"); 
                $pdo = new \PDO("mysql:host=".$data["host"].";dbname=tphack;port=3306", $data["user"], $data["password"]);
                $sql = "SELECT id, pseudo FROM user WHERE pseudo = :pseudo AND password = :mdp";
                $req = $pdo->prepare($sql);
                $req->bindParam(':pseudo',$_POST["user"],PDO::PARAM_STR);
                $req->bindParam(':mdp',$_POST["password"],PDO::PARAM_STR);
                $req->execute();
                $res=$req->fetch();

                if(isset($res["id"])) {
                    // On génère un token de connexion unique pour identifier la connexion de l'utilisateur. Cela permettra d'identifier de manière plus sécurisée l'utilisateur connecté. C'est ce token de connexion qui sera stocké dans le fichier de cookie pour connecter automatiquement l'utilisateur.
                    $token = bin2hex(random_bytes(30));

                    // Les tokens de connexion sont stockés en base et sont associés au pseudo de l'utilisateur.
                    $sql = "INSERT INTO connexion (`token`, `pseudo`) VALUES ('".$token."', '".$res["pseudo"]."')";
                    $res = $pdo->query($sql);

                    setCookie("user", $token);
                    header("Location: connexion.php");
                    exit();
                }
                else {
                    echo "<p>Identifiant ou mot de passe incorrect !</p>";
                }
            }

            if(isset($_POST["deleteCookie"])) {
                $data = parse_ini_file("config.ini"); 
                $pdo = new \PDO("mysql:host=".$data["host"].";dbname=tphack;port=3306", $data["user"], $data["password"]);

                $sql = "DELETE FROM connexion WHERE token = '".$_COOKIE["user"]."'";
                $res = $pdo->query($sql);

                unset($_COOKIE["user"]);
                setcookie("user", "", time() - 3600);
            }

            if(isset($_COOKIE["user"])) {
                $data = parse_ini_file("config.ini"); 
                $pdo = new \PDO("mysql:host=".$data["host"].";dbname=tphack;port=3306", $data["user"], $data["password"]);

                $sql = "SELECT pseudo FROM connexion WHERE token = '".$_COOKIE["user"]."'";
                $res = $pdo->query($sql)->fetch();

                echo "Vous êtes connecté avec succès en tant qu'utilisateur : ".$res["pseudo"];
                echo "<br/><br/>";
                echo "<form method='POST' action=''>";
                echo "<button type='submit' name='deleteCookie'>Déconnexion (supprime le cookie de connexion)</button>";
                echo "</form></body></html>";
                exit();
            }
        ?>
        <form method="POST" action="">
            <h1>Formulaire de connexion</h1>
            <input type="text" name="user" placeholder="Pseudo" /><br/>
            <input type="password" name="password" placeholder="Mot de passe" /><br/><br/>
            <button type="submit" name="ok">OK</button>
        </form>
    </body>
</html>