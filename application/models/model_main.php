<?php

class Model_Main extends Model
{
    
    public function get_list($db)
    {    
        $sql = "SELECT * FROM Goods INNER JOIN `Collection_name` ON collect_id = collection ORDER BY collection";
		$result = mysqli_query($db, $sql);
        return $result;
    }
}

?>