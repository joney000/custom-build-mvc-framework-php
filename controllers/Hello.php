<?php
/**
 *
 * Author 	   : Jaswant Singh [jaswant.singh@practo.com][Joney_000]
 * Description : Sample Hello world Controller
 * Target 	   : Demonstration of Simple Controller and rander some plaintext
 * Date        : 20-June-2016
 * Algorithms  : None [Brute Frc]
 */
require_once 'libs/Controller.php';

class Hello extends Controller
{
	public function indexAction($id = 0)
	{
		$this->view->hello = 'Hello World from Hello Controller Index action';
		$this->view->render('views/hello/index.phtml');
	}
}