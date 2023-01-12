<?php

class Feedback extends Controller 
{

    function __construct()
	{
        $this->view = new View();
	}

    function action_(){

        $this->view->generate('feedback_view.php', 'template_view.php');
    }

    function action_feedback()
	{
        $error = false;

        if(isset($_POST["name"]) and !empty($name)){

                $name = $_POST["name"];
        }
        else{

            $error = true;
            $name = 'Имя отсутствует.';
        }

        $rex = '/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i';

        if(isset($_POST["email"]) and preg_match($rex, $_POST["email"])){
        
            $email = $_POST["email"];
        }
        else{
            $error = true;
            $email = 'Некорректно введен адрес электронной почты.';
        }
        if(isset($_POST["message"]) and strlen($_POST["message"]) > 2){
        
            $message = $_POST["message"];
        }
        else{

            $error = true;
            $message = 'Слишком короткий текст сообщения.';
        }
        
		$data = array("name"=>$name, "email"=>$email, "message"=>$message, "error"=>$error);

		$this->view->generate('feedback_view.php', 'template_view.php', $data);
	}
}