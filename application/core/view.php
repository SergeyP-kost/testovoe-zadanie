<?php

class View
{
	
	function generate($content_view, $data = null, $return = false)
	{
		if ($return) {

			ob_start();
			include 'application/views/'.$content_view;
			$output = ob_get_contents();
			ob_end_clean();

			return $output;

		} else {

			include 'application/views/main_view.php';
		}
	}
}
