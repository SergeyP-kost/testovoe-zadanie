<h1 align='center'>Каталог товаров</h1>
<table>
    <tr>
        <?php

            $cnt = 1;
            
            foreach($data as $key => $value){
                if ($cnt % 3 == 0){
                    echo '</tr><tr>';
                    $cnt = 1;
                }
                echo "<td class='unit' style=\"background-color: greenyellow\">Коллекция: $key</td>";
                $cnt++;
                foreach($value as $i){
                    if ($cnt % 3 == 0){
                        echo "<td class='unit' style=\"background-color: aquamarine\">
                        Название: <a href=\"/products/card_product/?index=$i[0]\"> $i[1] </a> Цена: $i[2] руб.</td>";
                        echo '</tr><tr>';
                        $cnt = 1;
                    }
                    echo "<td class='unit' style=\"background-color: aquamarine\">
                    Название: <a href=\"/products/card_product/?index=$i[0]\"> $i[1] </a> Цена: $i[2] руб.</td>";
                    $cnt++;
                }
            }   
        ?>
    </tr>
</table>