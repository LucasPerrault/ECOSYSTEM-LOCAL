<?php
namespace ECOSYSTEM\App\Controleur\admin;

class Controleur {
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

	public function layout() {
		$this->_manager->getView('layout');
  }

	public function notFound() {
    $this->_manager->getView('erreur404');
  }
}
