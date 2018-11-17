<?php
namespace ECOSYSTEM\App\Controleur\client;

class ControleurClient {
 /*
  * Class Controleur
  */
	protected $_manager;
	protected $_content;

  public function __construct() {
		require 'app/config/ClientManager.php';
    // Constructeur du contrôleur
		// $this->manager->getModel('Content');
		// $this->_content = new Content;
    $this->_manager = new \ECOSYSTEM\app\config\ClientManager;
  }

	public function home() {
		$this->_manager->getView('home');
  }

	public function mentionLegale() {
		$this->_manager->getView('mentionLegale');
	}

	public function notFound() {
    $this->_manager->getView('erreur404');
  }
}
