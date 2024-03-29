<?php

class Feedback extends Controller 
{

    function __construct()
	{
		$this->view = new View();
	}


    function action_index()
	{
        $data = [];

        if(!empty($_POST)) {
            
            $errors = $this->validate_form_feedback();

            // пишем сообщение feedback в файл

            if (empty($errors)) {
    
                $file_feedback = fopen("feedback.txt", 'a') or die("не удалось открыть файл");

                fwrite($file_feedback, 'Дата: '.date('d.m.Y'). PHP_EOL);

                foreach($_POST as $key => $value) {

                    if (!empty($value)) {

                        fwrite($file_feedback, $key.': '.$value. PHP_EOL);
                    }
                    
                }

                if (!empty($_POST["product_id"]) && isset($_POST["product_id"])) {

                    $result = $this->get_product_data($_POST["product_id"]);

                    foreach($result as $key => $value) {

                        fwrite($file_feedback, $key.': '.$value. PHP_EOL);
                    }

                }

                echo 'Успешная запись!';

                fclose($file_feedback);

                return $this->view->generate('feedback_write.php', $_POST);

            }

            $data["errors"] =  $errors;
        }

        $data["name"] = $_POST["name"] ?? '';
        $data["email"] = $_POST["email"] ?? '';
        $data["message"] = $_POST["message"] ?? '';
        $data["product_id"] = $_GET["product_id"] ?? ''
;
        $this->view->generate('feedback_view.php', $data);

    } 


    function get_product_data(int $product_id): array
    {
        require_once 'application/models/model_products.php';
        $this->model = new Model_Products();
		$data = $this->model->get_item($product_id);
        return $data;
    }


    function validate_form_feedback(): array
    {

        $message_errors = [];
        
        if(!empty($_POST["name"])) {

                $name = $_POST["name"];
        } else{

            $message_errors["name"] = 'Введите имя.';
        }

        $rex = '/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i';

        if(preg_match($rex, $_POST["email"])) {
        
            $email = $_POST["email"];
        } else{
  
            $message_errors["email"] = 'Некорректно введен адрес электронной почты.';
        }
        if(strlen($_POST["message"]) > 2) {
        
            $message = $_POST["message"];
        } else{

            $message_errors["message"] = 'Слишком короткий текст сообщения.';
        }

        return $message_errors;
    }
}
