<?php

class News extends Controller 
{
    function __construct()
	{
		$this->model = new Model_News();
		$this->view = new View();
	}

    function action_()
	{
		require_once 'application/core/dbconnection.php';
		$data = $this->model->get_list($link);	
		$result = array();

            foreach( $data as $row ){
                $result[$row['id_news']] = array($row['name_news'], $row['text_news'], $row['date_news']);
            }

		$this->view->generate('news_view.php', 'template_view.php', $result);
	}

    function action_index()
	{
		require_once 'application/core/dbconnection.php';
		$item = $_GET['index'];
		$data = $this->model->get_item($link, $item);
		foreach( $data as $row ){
			$data = array("name" => $row['name_news'], "text" => $row['text_news'], "date"=>$row['date_news']);
		}	
		$this->view->generate('news_card_view.php', 'template_view.php', $data);
	}

	function action_create()
	{
		require_once 'application/core/dbconnection.php';
		
		if (isset($_POST['name']) and isset($_POST['text'])){
			$created = array("name" => $_POST['name'], "text" => $_POST['text'], "date"=>date('Y/m/d'));
			$this->view->generate('news_card_view.php', 'template_view.php', $this->model->create($link, $created));
		} else {
			$this->view->generate('news_create_view.php', 'template_view.php');
		}
	}
}