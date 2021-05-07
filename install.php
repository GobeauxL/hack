<?php
session_start();
error_reporting(0);

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'></head><body>";
echo "<h1>Initialisation des données</h1><br/>";

$host = "localhost";
$user = "phpmyadmin";
$password = "0550002D";

if(isset($_GET["host"])) {
    $host = $_GET["host"];
}
if(isset($_GET["user"])) {
    $user = $_GET["user"];
}
if(isset($_GET["password"])) {
    $password = $_GET["password"];
}

if(file_exists("config.ini") === true) {
    if(unlink("config.ini") === false) {
        echo "Une erreur est survenue lors de la suppression du fichier config.ini<br/>";
        if(file_exists("config.ini") === true && is_writable("config.ini") === false) {
            echo "Le fichier ou le dossier semble ne pas être accessible en écriture !";
        }
        echo "</body></html>";
        exit();
    }
}

$configFile = fopen("config.ini", "w");

if($configFile === false ){
    echo "Une erreur est survenue lors de la création du fichier config.ini<br/>";
    if(is_file("config.ini") === true && is_writable("config.ini") === false) {
        echo "Le fichier semble ne pas être accessible en écriture !";
    }
}
else {
    fwrite($configFile, "host=".$host."\n");
    fwrite($configFile, "user=".$user."\n");
    fwrite($configFile, "password=".$password."\n");
    fclose($configFile);

    $base = "tphack";

    $bdd = new mysqli($host, $user, $password);
    $bdd->set_charset("utf8");

    if ($bdd->connect_errno) {
        echo "Une erreur est survenue lors de la connexion au serveur de base de données :<br/>";
        echo "<b>[".$bdd->connect_errno."]</b> ".utf8_encode($bdd->connect_error);
        echo "<br/><br/>";
        echo "<b>L’utilisateur de connexion par défaut utilisé pour se connecter à la base de données est « root ». Pour changer le nom d’utilisateur, il faudra passer l’utilisateur en GET de l’URL lors de l’appel de la page install.php. Exemple : http://.../install.php?user=monUtilisateur.</b>";
        echo "<br/><br/>";
		echo "<b>Le mot de passe de connexion à la base de données utilisé par défaut est « 0550002D ». Pour changer le mot de passe, il faudra passer le mot de passe en GET de l’URL lors de l’appel de la page install.php. Exemple : install.php?password=monMotDePasse.</b>";
    }
    else {
        $sql = "DROP DATABASE IF EXISTS `".$base."`";

        if (!$bdd->query($sql)) {
            echo "Une erreur est survenue lors de la suppression de la base de données :<br/>";
            echo $bdd->error;
        }
        else {
            $sql = "CREATE DATABASE `".$base."`";

            if (!$bdd->query($sql)) {
                echo "Une erreur est survenue lors de la création de la base de données :<br/>";
                echo $bdd->error;
            } else {
                $bdd->select_db($base);

                $sql = "CREATE TABLE `user` ( `id` INT NOT NULL AUTO_INCREMENT, `pseudo` VARCHAR(500), `password` VARCHAR(500), PRIMARY KEY (id))";

                if (!$bdd->query($sql)) {
                    echo "Une erreur est survenue lors de la création de la table user :<br/>";
                    echo $bdd->error;
                }
                else {
                    $sql = "INSERT INTO user (`pseudo`, `password`) VALUES ('toto', 'titi')";

                    if (!$bdd->query($sql)) {
                        echo "Une erreur est survenue lors de l'insertion dans la table user :'<br/>";
                        echo $bdd->error;
                    }
                    else {
                        $sql = "CREATE TABLE `commentaire` ( `id` INT NOT NULL AUTO_INCREMENT, `pseudo` VARCHAR(500), `texte` VARCHAR(5000), `dateMessage` DATETIME, PRIMARY KEY (id))";

                        if (!$bdd->query($sql)) {
                            echo "Une erreur est survenue lors de la création de la table commentaire :<br/>";
                            echo $bdd->error;
                        }
                        else {
                            $sql = "INSERT INTO commentaire (`pseudo`, `texte`, `dateMessage`) VALUES ('toto', 'Bonjour ! Ce site est vraiment vulnérable aux attaques XSS et aux injections SQL !', NOW())";

                            if (!$bdd->query($sql)) {
                                echo "Une erreur est survenue lors de l'insertion dans la table commentaire :'<br/>";
                                echo $bdd->error;
                            }
                            else {
                                $sql = "CREATE TABLE `connexion` ( `token` VARCHAR(100), `pseudo` VARCHAR(500), PRIMARY KEY (token))";

                                if(!$bdd->query($sql)) {
                                    echo "Une erreur est survenue lors de la création de la table connexion :<br/>";
                                    echo $bdd->error;
                                }
                                else {
                                    if(isset($_COOKIE["user"])) {
                                        unset($_COOKIE["user"]);
                                        setcookie("user", "", time() - 3600);

                                        echo "<b>Les cookies de la page de connexion ont été supprimés !</b><br/>";
                                    }

                                    if(isset($_SESSION["admin"])) {
                                        unset($_SESSION["admin"]);

                                        echo "<b>La session de la page de suppression a été détruite !</b><br/>";
                                    }

                                    echo "<b>Installation de la base de données ".$base." terminée avec succès !</b>";
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    if (!$bdd->connect_errno) {
        $bdd->close();
    }
}

echo "</body></html>";
session_destroy();