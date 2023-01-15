<h1 align='center'>Карточка товара</h1>

<table class="col-12">
    <tr>
<?php

    foreach ($data as $row) { ?>
        <tr><td class='unit' style="background-color: greenyellow;"><?php echo "Коллекция: " . $row['name_collection'] ?> </td></tr>
        <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Название модели: " . $row['name'] ?> </td></tr>
        <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Цена: " . $row['price'] . " руб." ?> </td></tr>
        <p><a style="float: right" href="/feedback/?product_id=<?php echo $row['id'] ?>">Задать вопрос о товаре</a></p>
    <?php } ?>
    </tr>
</table>

