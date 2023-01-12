<?php

class News extends Controller 
{
    function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}

}