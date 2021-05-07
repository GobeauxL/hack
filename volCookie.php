<?php
    if(isset($_GET["cookie"])) {
        echo "Hahaha je t'ai volé ton cookie de connexion !!!<br/>";
        echo "Ton cookie est le suivant : ".$_GET["cookie"];
    }
?>