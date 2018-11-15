<?php
  require 'app/config/ModuleAdmin.php';
  require 'app/config/Module.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      // Chargement des librairies nécessaires
      Module::base();
      Module::navbar();
      ModuleAdmin::clientProfil();
      Module::bouton();
      Module::login();
    ?>
  </head>
  <body>
    <?php
    // require 'lib/composants/barre-de-navigation/navbar.php'
    require 'app/vues/partage/login.php'


    ?>



  </body>
</html>
