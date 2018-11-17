<?php
namespace ECOSYSTEM\App\Controleur\admin;

class ControleurAdmin {
 /*
  * Class Controleur
  */
	protected $_manager;
	protected $_content;

  public function __construct() {
		require 'app/config/AdminManager.php';
    // Constructeur du contrôleur
		// $this->manager->getModel('Content');
		// $this->_content = new Content;
    $this->_manager = new \ECOSYSTEM\app\config\AdminManager;
  }

	public function home() {
		$this->_manager->getView('home');
  }

	public function notFound() {
    $this->_manager->getView('erreur404');
  }
}
