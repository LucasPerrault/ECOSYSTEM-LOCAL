<?php
class ModuleClient {
  /* Classe regroupant l'ensemble des librairies */

  public static function navbarClient() {
    ?>
    <link rel="stylesheet" href="<?=ROOT_URL?>lib/composants/barre-de-navigation/client/css/navbar-client-desktop.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>lib/composants/barre-de-navigation/client/css/navbar-client-mobile.css">
    <script type="text/javascript" src="<?=ROOT_URL?>lib/composants/barre-de-navigation/client/js/navbar-client.js"></script>
    <?php
  }

  public static function mentionLegale() {
    ?>
    <link rel="stylesheet" href="<?=ROOT_URL?>lib/composants/mention-legale/css/mention-legale-desktop.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>lib/composants/mention-legale/css/mention-legale-mobile.css">
    <?php
  }

}
?>
