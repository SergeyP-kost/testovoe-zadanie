<h1 align='center'>Каталог товаров</h1>

<table>
    <tr>
        <?php

            if (!isset($data['history'])) {

                $cnt = 1;
            
                foreach ($data as $key => $value){

                    if ($cnt % 3 == 0) {
                        echo '</tr><tr>';
                        $cnt = 1;
                    } ?>

                    <td class='unit' style="background-color: greenyellow">Коллекция: <?php echo reset($value)['name_collection'] ?></td>
                    
                    <?php 

                    $cnt++;

                    foreach ($value as $row) {

                        if($cnt % 3 == 0){
                            echo $row['html'];
                            echo '</tr><tr>';
                            $cnt = 1;
                        }

                        echo $row['html'];
                        $cnt++;
                    }
                }
            }   
        ?>
    </tr>
</table>