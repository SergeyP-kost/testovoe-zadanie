<h1 align='center'>Карточка товара</h1>

<table class="col-12">
    <tr>
        <tr><td class='unit' style="background-color: greenyellow;"><?php echo "Коллекция: " . $data['name_collection'] ?> </td></tr>
        <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Название модели: " . $data['name'] ?> </td></tr>
        <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Цена: " . $data['price'] . " руб." ?> </td></tr>
        <p><a style="float: right" href="/feedback/?product_id=<?php echo $data['id'] ?>">Задать вопрос о товаре</a></p>
    </tr>
</table>
<table>
    <tr>
        <?php 
        
            if (isset($data['history'])) {

                echo "<h2 style=\"padding-top: 2%\" align='center'>История просмотра</h2>";

                foreach ($data['history'] as $row) { ?>
                    <tr>
                        <td><?php echo $row; ?>
                    </tr>
                    <?php }
            } 
        ?>
    </tr>
</table>
