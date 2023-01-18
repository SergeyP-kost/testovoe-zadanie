<?php

class Model_Products extends Model
{

    public function get_list()
    {    
        require 'application/core/dbconnection.php';
        $sql = "SELECT * FROM Goods INNER JOIN `Collection` ON id_collection = collection ORDER BY collection";
		$data = mysqli_query($link, $sql);
        
        return $data;
    }
    
    public function get_item($item)
    {    
        require 'application/core/dbconnection.php';
        $sql = "SELECT * FROM Goods INNER JOIN `Collection` ON id_collection = collection WHERE id = $item";
		$data = mysqli_query($link, $sql);
        
        $result = [];

        foreach ($data as $row) {

			$result = array(
				'id' => $row["id"], 
				'name' => $row["name"], 
				'name_collection' => $row["name_collection"], 
				'price' => $row["price"],
			);
        }

        return $result;
    }
}

?>