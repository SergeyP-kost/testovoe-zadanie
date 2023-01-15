<?php

class Route
{

	static function start()
	{
		$controller_name = 'Products';
		$action_name = 'index';

		$URIParts = parse_url($_SERVER['REQUEST_URI']);
  		$routes = explode('/', $URIParts["path"]);

		if ( !empty($routes[1]) ) {	
			$controller_name = $routes[1];
		}

		if ( !empty($routes[2]) ) {
			$rex = '/[a-z_]+/';
			preg_match($rex, $routes[2], $arr);
			$action_name = $arr[0];
		}

		$model_name = 'Model_'.$controller_name;
		$action_name = 'action_'.$action_name;

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;

		if(file_exists($model_path)) {
			include "application/models/".$model_file;
		}

		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;

		if(file_exists($controller_path)) {
			include "application/controllers/".$controller_file;
		}
		// else
		// {
		// 	Route::ErrorPage404();
		// }
		
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action)) {
			$controller->$action();
		}
		// else
		// {
		// 	Route::ErrorPage404();
		// }
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
		
		header('Location:'.$host.'404');
    }
    
}
