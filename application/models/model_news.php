<?php

class Model_News extends Model 
{
    public function get_list($db)
    {    
        $sql = "SELECT * FROM News";
		$result = mysqli_query($db, $sql);
        return $result;
    }
    public function get_item($db, $item)
    {    
        $sql = "SELECT * FROM News WHERE id_news = $item";
		$result = mysqli_query($db, $sql);
        return $result;
    }

    function create($db, $data)
    {
        $name = $data['name'];
        $text = $data['text'];
        $date = date('Y/m/d');
        $sql = mysqli_query($db, "INSERT INTO News(name_news, text_news, date_news) VALUES ('$name', '$text', '$date')");

        if ($sql) {
            echo '<p>Данные успешно добавлены в таблицу.</p>';
            return array("name" => $name, "text" => $text, "date" => $date);
          } else {
            echo '<p>Произошла ошибка: ' . mysqli_error($db) . '</p>';
          }
    }
}