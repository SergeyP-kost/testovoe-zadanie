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
                $result[$row['id_news']] = array($row['name_news'], $row['text_news'], $row['date']);
            }

		$this->view->generate('news_view.php', 'template_view.php', $result);
	}

    function action_index()
	{
		require_once 'application/core/dbconnection.php';
		$item = $_GET['index'];
		$data = $this->model->get_item($link, $item);	
		$this->view->generate('news_card_view.php', 'template_view.php', $data);
	}

}