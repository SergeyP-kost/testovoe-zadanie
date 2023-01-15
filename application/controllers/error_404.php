<?php

class Error_404 extends Controller
{
	
	function action_()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}

}
