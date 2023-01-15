<?php

class Products extends Controller
{

	function __construct()
	{
		$this->model = new Model_Products();
		$this->view = new View();
	}
	
	function action_index()
	{
		require_once 'application/core/dbconnection.php';
		$data = $this->model->get_list($link);	
		$result = array();

            while($row = mysqli_fetch_array($data)){
                $result[$row['name_collection']][] = array($row['id'], $row['name'], $row['price']);
            }

		$this->view->generate('products_view.php', 'template_view.php', $result);
	}

	function action_card_product()
	{
		require_once 'application/core/dbconnection.php';
		$item = $_GET['index'];
		$data = $this->model->get_item($link, $item);	
		$this->view->generate('card_product_view.php', 'template_view.php', $data);
	}

}

?>