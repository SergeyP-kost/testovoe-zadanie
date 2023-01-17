<?php 
    if(isset($data['history'])) {
        echo "<h2 style=\"padding-top: 2%\" align='center'>История просмотра</h2>";
    } else {
        echo "<h1 align='center'>Каталог товаров</h1>";
    }
?>

<table>
    <tr>
        <?php

            if (!isset($data['flag'])) {

                $cnt = 1;
            
                foreach ($data as $key => $value){

                    if ($cnt % 3 == 0) {
                        echo '</tr><tr>';
                        $cnt = 1;
                    }

                    echo "<td class='unit' style=\"background-color: greenyellow\">Коллекция: $key</td>";
                    $cnt++;

                    foreach ($value as $i) {

                        if($cnt % 3 == 0){
                            echo "<td class='unit' style=\"background-color: aquamarine\">
                            Название: <a href=\"/products/card_product/?product_id=$i[0]\"> $i[1] </a> Цена: $i[2] руб.</td>";
                            echo '</tr><tr>';
                            $cnt = 1;
                        }

                        echo "<td class='unit' style=\"background-color: aquamarine\">
                        Название: <a href=\"/products/card_product/?product_id=$i[0]\"> $i[1] </a> Цена: $i[2] руб.</td>";
                        $cnt++;
                    }
                }   
            } else {

                foreach ($data['history'] as $row) { ?>
                <tr>
                    <td class='unit' style="background-color: greenyellow">Коллекция: <?php echo $row['name_collection'] ?></td>
                    <td class='unit' style="background-color: aquamarine">Название: <a href="/products/card_product/?product_id=<?php echo $row['product_id']. '">'. $row['name'].'</a> ' ?></td>
                </tr>
                <?php }
            }
        ?>
    </tr>
</table>