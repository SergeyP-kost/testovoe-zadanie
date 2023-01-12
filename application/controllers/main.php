<?php

class Main extends Controller
{

	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}
	
	function action_()
	{
		require_once 'application/core/dbconnection.php';
		$data = $this->model->get_list($link);	
		$result = array();

            while($row = mysqli_fetch_array($data)){
                $result[$row['name_collection']][] = array($row['id'], $row['name'], $row['price']);
            }

		$this->view->generate('main_view.php', 'template_view.php', $result);
	}

	function action_index()
	{
		require_once 'application/core/dbconnection.php';
		$item = $_GET['index'];
		$data = $this->model->get_item($link, $item);		
		$this->view->generate('card_view.php', 'template_view.php', $data);
	}

}

?>