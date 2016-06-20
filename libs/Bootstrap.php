<?php
/**
 *
 * Author 	   : Jaswant Singh [jaswant.singh@practo.com][Joney_000]
 * Description : Bootstrap Tamplating class
 * Target 	   : Load Action Controller
 * Date        : 18-June-2016
 * Algorithms  : None [Brute Frc]
 */
class Bootstrap
{
	public function __construct() 
	{

		$tokens = explode('/',rtrim($_SERVER['REQUEST_URI'], '/'));

		$controllerName = ucfirst($tokens[1]);
		if (file_exists('controllers/'.$controllerName.'.php')) {
			require_once('controllers/'.$controllerName.'.php');
			$controller = new $controllerName;
			if (isset($tokens[2])) {
				$actionName = $tokens[2] . 'Action';
				if(isset($tokens[3])) {
					$controller->{$actionName}($tokens[3]);	
				}
				else {
					$controller->{$actionName}();
				}
			}
			else
			{
				// default action
				$controller->IndexAction();
			}				
		}
		else {
			require_once('controllers/Error.php');
			$controllerName = 'Error';
			$controller = new $controllerName;
			$controller->IndexAction();
		}		
	}
}