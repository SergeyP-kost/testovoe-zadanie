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
		
		$data = $this->model->get_list();

		$result = [];

        foreach ($data as $row) {
			
			$html = $this->view->generate('product_small_card.php', $row, $return = true);

			$result[$row['id_collection']][$row['id']] = array(
				'name_collection' => $row['name_collection'],
				'id' => $row['id'],
				'name' => $row['name'],	
				'price' => $row['price'],
				'html' => $html
			);

		}

		$this->view->generate('product_index.php', $result);
	}

	function action_card_product()
	{
		$product_id = $_GET['product_id'];

		$data = $this -> model->get_item($product_id);

		$history = $this->get_block_history($product_id);
		
		$data['history'] = $history;

		$this->view->generate('product_card_view.php', $data);

	}

	function get_block_history(int $product_id)
	{
		$result = [];

		if (!isset($_SESSION['history'])) {

			$_SESSION['history'] = [];
		} 

		// Сохранение истории просмотра.

		if (!in_array($product_id, $_SESSION['history'])) {

			array_push($_SESSION['history'], $product_id);
		}
		
		if (count($_SESSION['history']) > 4) {

			array_shift($_SESSION['history']);		

		} 

		foreach ($_SESSION['history'] as $row) {

			$html = $this->view->generate(
				'product_small_card.php', 
				$this -> model->get_item($row), 
				$return = true
			);

			$result[] = $html;
		}

		return $result;

	}
}

?>