<?php

class Model_Card extends Model
{
    public function get_item($db, $item)
    {    
        $sql = "SELECT * FROM Goods INNER JOIN `Collection_name` ON collect_id = collection WHERE id = $item";
		$result = mysqli_query($db, $sql);
        return $result;
    }
    
}

?>