<?php

class Model_Products extends Model
{
    
    public function get_list($db)
    {    
        $sql = "SELECT * FROM Goods INNER JOIN `Collection` ON id_collection = collection ORDER BY collection";
		$result = mysqli_query($db, $sql);
        
        return $result;
    }
    public function get_item($db, $item)
    {    
        $sql = "SELECT * FROM Goods INNER JOIN `Collection` ON id_collection = collection WHERE id = $item";
		$data = mysqli_query($db, $sql);
        $result = [];

        foreach ($data as $row) {
			$result = array(
				"product_id" => $row["id"], 
				"name" => $row["name"], 
				"name_collection" => $row["name_collection"], 
				"price" => $row["price"]
			);
		}

        return $result;
    }
}

?>