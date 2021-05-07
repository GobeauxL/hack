<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST["pseudo"]) && isset($_POST["message"])) {
                $data = parse_ini_file("config.ini"); 
                $pdo = new \PDO("mysql:host=".$data["host"].";dbname=tphack;port=3306", $data["user"], $data["password"]);
                $sql = "INSERT INTO commentaire (pseudo, texte, dateMessage) VALUES ('".$_POST["pseudo"]."', '".$_POST["message"]."', NOW())";
                $res = $pdo->query($sql);

                //echo $sql."<br/>";

                echo "Commentaire publié";
            }
        ?>
        <form method="POST" action="">
            <h1>Poster un commentaire :</h1>
            <input type="text" name="pseudo" placeholder="Pseudo" /><br/>
            <textarea name="message" placeholder="Ecrire votre message"></textarea>
            <button type="submit" name="ok">OK</button>
        </form>
        <br/><br/>
        <div id="commentaires">
            <h1>Les commentaires :</h1>
            <?php
                $data = parse_ini_file("config.ini"); 
                $pdo = new \PDO("mysql:host=".$data["host"].";dbname=tphack;port=3306", $data["user"], $data["password"]);
                $sql = "SELECT pseudo, texte, dateMessage FROM commentaire ORDER BY dateMessage DESC";
                $res = $pdo->query($sql)->fetchAll();

                foreach($res as $commentaire) {
                    echo "<div>";
                    echo "<b>".$commentaire["pseudo"]."</b> - ";
                    echo "<i>Posté le : ".$commentaire["dateMessage"]."</i>";
                    echo "<br/>";
                    echo "<p>".$commentaire["texte"]."</p>";
                    echo "</div><hr/>";
                }
            ?>
        </div>
    </body>
</html>
