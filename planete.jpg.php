<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>4.3. Rendre les JPEGs plus légers</title>
    <link rel="stylesheet" href="gimp-help-plain.css" type="text/css" />
    <link rel="stylesheet" href="gimp-help-screen.css" type="text/css" />
    <link rel="stylesheet" href="gimp-help-custom.css" type="text/css" />
    <link rel="alternate stylesheet" href="gimp22.css" type="text/css" title="gimp22" />
    <meta name="generator" content="DocBook XSL Stylesheets V1.78.1" />
    <link rel="home" href="index.html" title="GNU Image Manipulation Program" />
    <link rel="up" href="gimp-tutorial-quickies.html" title="4. Tutoriels rapides pour débuter" />
    <link rel="prev" href="gimp-tutorial-quickie-scale.html" title="4.2. Changer la Taille d'une Image (Échelle et Taille)" />
    <link rel="next" href="gimp-tutorial-quickie-crop.html" title="4.4. Découper une Image" />
  </head>
  <body>
    <div class="navheader">
      <table width="100%" summary="Navigation header">
        <tr>
          <th colspan="3" align="center">4.3. Rendre les JPEGs plus légers</th>
        </tr>
        <tr>
          <td width="20%" align="left"><a accesskey="p" href="gimp-tutorial-quickie-scale.html"><img src="images/prev.png" alt="Précédent" /></a> </td>
          <th width="60%" align="center">4. Tutoriels rapides pour débuter</th>
          <td width="20%" align="right"> <a accesskey="n" href="gimp-tutorial-quickie-crop.html"><img src="images/next.png" alt="Suivant" /></a></td>
        </tr>
      </table>
      <hr />
    </div>
    <div class="sect2">
      <div class="titlepage">
        <div>
          <div>
            <h3 class="title"><a id="gimp-tutorial-quickie-jpeg"></a>4.3. Rendre les JPEGs plus légers</h3>
          </div>
        </div>
      </div>
      <a id="idm273584237648" class="indexterm"></a>
      <a id="idm273584236480" class="indexterm"></a>
      <div class="figure">
        <a id="idm273584234864"></a>
        <p class="title">
          <strong>Figure 3.20. Exemple d'image à sauvegarder en JPEG</strong>
        </p>
        <div class="figure-contents">
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-example.jpg" alt="Exemple d'image à sauvegarder en JPEG" />
          </div>
        </div>
      </div>
      <br class="figure-break" />
      <p>Vous pouvez rendre vos <span class="quote">« <span class="quote">jpegs</span> »</span> plus légers sans changer la largeur en pixels. Mais ainsi vous ne diminuerez pas considérablement son poids (en octets). J'ai utilisé une (autre) image APOD <a class="xref" href="bibliography.html#bibliography-online-apod04" title="Astronomy Picture of the Day - Saturn: Lord of the Rings (2002 February 15)">[<abbr class="abbrev">APOD04</abbr>]</a>. L'image originale est très importante (3000 pixels de large) donc il faut en fabriquer une autre en diminuant sa largeur. Pour cela il est nécessaire de réduire l'image en lui attribuant une largeur et une longueur plus convenables pour le web comme décrit dans <a class="xref" href="gimp-tutorial-quickie-scale.html" title="4.2. Changer la Taille d'une Image (Échelle et Taille)">Section 4.2, « Changer la Taille d'une Image (Échelle et Taille) »</a>. Cliquez-droit sur cette image mise à l'échelle et choisissez les menus <span class="guimenu">Fichier</span> → <span class="guimenuitem">Enregistrer sous...</span></p>
      <div class="figure">
        <a id="idm273585701360"></a>
        <p class="title">
          <strong>Figure 3.21. la fenêtre Enregistrer l'image</strong>
        </p>
        <div class="figure-contents">
          <div class="mediaobject">
            <img src="images/tutorials/quickie-save-image-dialog-file-type.png" alt="la fenêtre Enregistrer l'image" />
          </div>
        </div>
      </div>
      <br class="figure-break" />
      <p>Tapez le nom du fichier dans la boîte de texte Nom et choisissez le nom de l'extension dans la liste qui apparaît si vous cliquez sur <span class="guimenu">Sélectionner le type de fichier (Selon l'extension)</span> Si le GIMP affiche un message d'erreur ou si <span class="quote">« <span class="quote">JPEG</span> »</span> apparaît en grisé dans le menu d'extensions arrêtez tout et lisez <a class="xref" href="gimp-tutorial-quickie-change-mode.html" title="4.6. Changer de mode">Section 4.6, « Changer de mode »</a>.</p>
      <p>Le dialogue Enregistrer en JPEG utilise des valeurs par défaut qui réduisent la taille en conservant une bonne qualité visuelle. C'est ce qu'il y a de mieux à faire.</p>
      <div class="figure">
        <a id="idm273580793856"></a>
        <p class="title">
          <strong>Figure 3.22. Enregistrer en JPEG avec une faible qualité</strong>
        </p>
        <div class="figure-contents">
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-dialog.png" alt="Enregistrer en JPEG avec une faible qualité" />
          </div>
        </div>
      </div>
      <br class="figure-break" />
      <p>Si vous voulez diminuer encore plus le poids de l'image, assurez-vous que <span class="quote">« <span class="quote">Afficher l'aperçu dans la fenêtre d'image</span> »</span> a été coché de façon à voir les modifications lors du changement de compression en utilisant le curseur, en particulier quand il se déplace vers la gauche. Mais attention, comme vous le constaterez sur les captures d'images: plus la valeur est faible et plus la qualité de l'image est mauvaise. Vous verrez aussi des captures où les valeurs donnent une qualité d'image acceptable.</p>
      <div class="figure">
        <a id="idm273580789824"></a>
        <p class="title">
          <strong>Figure 3.23. Fenêtre d'enregistrement en JPEG</strong>
        </p>
        <div class="figure-contents">
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-dialog2.png" alt="Fenêtre d'enregistrement en JPEG" />
          </div>
        </div>
      </div>
      <br class="figure-break" />
      <p>Je n'ai pas montré les jpeg que j'ai créés de façon à terminer plus vite.</p>
      <div class="figure">
        <a id="idm273580786528"></a>
        <p class="title">
          <strong>Figure 3.24. Exemple de Forte Compression JPEG</strong>
        </p>
        <div class="figure-contents">
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-006.jpg" alt="Exemple de Forte Compression JPEG" />
            <div class="caption">
              <p>Qualité: 6; Taille: 1361 Octets</p>
            </div>
          </div>
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-042.jpg" alt="Exemple de Forte Compression JPEG" />
            <div class="caption">
              <p>Qualité: 42; Taille: 3549 Octets</p>
            </div>
          </div>
        </div>
      </div>
      <br class="figure-break" />
      <div class="figure">
        <a id="idm273583051968"></a>
        <p class="title">
          <strong>Figure 3.25. Exemple de Compression JPEG Moderée</strong>
        </p>
        <div class="figure-contents">
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-085.jpg" alt="Exemple de Compression JPEG Moderée" />
            <div class="caption">
              <p>Qualité: 85 (<acronym class="acronym">GIMP</acronym> par défaut); Taille: 6837 Octets</p>
            </div>
          </div>
          <div class="mediaobject">
            <img src="images/tutorials/quickie-jpeg-100.jpg" alt="Exemple de Compression JPEG Moderée" />
            <div class="caption">
              <p>Qualité: 100; Taille: 20,971 Octets</p>
            </div>
          </div>
        </div>
      </div>
      <br class="figure-break" />
    </div>
    <div class="navfooter">
      <hr />
      <table width="100%" summary="Navigation footer">
        <tr>
          <td width="40%" align="left"><a accesskey="p" href="gimp-tutorial-quickie-scale.html"><img src="images/prev.png" alt="Précédent" /></a> </td>
          <td width="20%" align="center">
            <a accesskey="u" href="gimp-tutorial-quickies.html">
              <img src="images/up.png" alt="Niveau supérieur" />
            </a>
          </td>
          <td width="40%" align="right"> <a accesskey="n" href="gimp-tutorial-quickie-crop.html"><img src="images/next.png" alt="Suivant" /></a></td>
        </tr>
        <tr>
          <td width="40%" align="left" valign="top"><a accesskey="p" href="gimp-tutorial-quickie-scale.html">4.2. Changer la Taille d'une Image (Échelle et Taille)</a> </td>
          <td width="20%" align="center">
            <a accesskey="h" href="index.html">
              <img src="images/home.png" alt="Sommaire" />
            </a>
          </td>
          <td width="40%" align="right" valign="top"> <a accesskey="n" href="gimp-tutorial-quickie-crop.html">4.4. Découper une Image</a></td>
        </tr>
      </table>
    </div>
  </body>
</html>
