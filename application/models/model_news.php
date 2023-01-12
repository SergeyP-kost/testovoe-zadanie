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
}