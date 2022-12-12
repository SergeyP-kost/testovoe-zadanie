<?php

class Controller_Card extends Controller
{

	function __construct()
	{
		$this->model = new Model_Card();
		$this->view = new View();
	}
	
	function action_index()
	{
		require_once 'application/core/dbconnection.php';
		$item = $_GET['item'];
		$data = $this->model->get_item($link, $item);		
		$this->view->generate('card_view.php', 'template_view.php', $data);
	}
}

?>