<?php
/**
 *
 * Author 	   : Jaswant Singh [jaswant.singh@practo.com][Joney_000]
 * Description : Index page controller to framework
 * Target 	   : Simple Index Controller Demo 
 * Date        : 18-June-2016
 * Algorithms  : None [Brute Frc]
 */
require_once 'libs/Controller.php';
require_once 'models/User.php';

class Index extends Controller
{
	public function indexAction($id = 0)
	{
		$user = new User();
		
		$this->view->message = 'Hello World from Index controller index action!' . $id;
		$this->view->render('views/index/index.phtml');
	}
}