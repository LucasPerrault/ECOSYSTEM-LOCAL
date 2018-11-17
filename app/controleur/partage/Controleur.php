<?php
namespace ECOSYSTEM\App\Controleur\partage;

class Controleur {
 /*
  * Class Controleur
  */
	protected $_manager;
	protected $_content;

  public function __construct() {
		require 'app/config/Manager.php';
    // Constructeur du contrôleur
		// $this->manager->getModel('Content');
		// $this->_content = new Content;
    $this->_manager = new \ECOSYSTEM\app\config\Manager;
  }

	public function authentification() {
		$this->_manager->getView('authentification');
  }

	public function notFound() {
    $this->_manager->getView('erreur404');
  }
}
