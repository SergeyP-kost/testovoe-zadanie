<?php


class Model_Main extends Model
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
		$result = mysqli_query($db, $sql);
        return $result;
    }
}

?>