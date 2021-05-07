<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_FILES["fichier"])) {
                if($_FILES["fichier"]["type"] == ("image/jpeg"))
                {    
                    $uploaddir = './';
                    $uploadfile = $uploaddir . basename($_FILES['fichier']['name']);
                    if (move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadfile)) {
                        echo "<p>L'image a été uploadé avec succès. <a href='".$_FILES['fichier']['name']."'>Cliquez ici pour accéder au fichier</a></p>";
                    }
                    else {
                        echo "<p>Une erreur est survenue lors de l'upload de l'image.</p>";
                    }
                }
                else{ echo "Bien essayé";}
            }
        ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <h1>Uploader une image :</h1>
            <label>Sélectionner votre image :</label>
            <input type="file" name="fichier"/><br/>
            <button type="submit" name="ok">Envoyer</button>
        </form>
    </body>
</html>