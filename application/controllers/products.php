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
		$result=$this->get_data_product();
		$data = [];

		while($row = mysqli_fetch_array($result)) {

			$data[$row['name_collection']][] = array($row['id'], $row['name'], $row['price']);
		}

		$this->view->generate('products_view.php', 'template_view.php', $data);
	}

	function action_card_product()
	{
		$product_id = $_GET['product_id'];
		$data=$this->get_data_product($product_id);
		
		if (!isset($_SESSION['history'])) {

			$_SESSION['history'] = [];
		} 

		// Сохранение истории просмотра.

		if (count($_SESSION['history']) > 4) {

			array_shift($_SESSION['history']);		

		} 
		
		array_push($_SESSION['history'], $data["product_id"]);
		
		foreach ($_SESSION['history'] as $row) {

			$data["history"][] = $this->get_data_product($row);
		}

		$data['flag'] = 'card';

		$this->view->generate('card_product_view.php', 'template_view.php', $data);

	}

	function get_data_product(int $item=null)
	{
		require 'application/core/dbconnection.php';
		
		if (is_null($item)) {

			return $this->model->get_list($link);	
		} else {

			return $this->model->get_item($link, $item);
		}
	}

}

?>