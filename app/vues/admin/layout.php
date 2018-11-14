<?php require 'app/config/ModuleAdmin.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      // Chargement des librairies nécessaires
      ModuleAdmin::base();
      ModuleAdmin::navbar();
      ModuleAdmin::clientProfil();
      ModuleAdmin::bouton();
    ?>
  </head>
  <body>
    <?php
    // require 'lib/composants/barre-de-navigation/navbar.php'
    require 'app/vues/partage/login.php'


    ?>



  </body>
</html>
