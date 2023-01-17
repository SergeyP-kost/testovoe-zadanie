<h1 align='center'>Карточка товара</h1>

<table class="col-12">
    <tr>
        <tr><td class='unit' style="background-color: greenyellow;"><?php echo "Коллекция: " . $data['name_collection'] ?> </td></tr>
        <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Название модели: " . $data['name'] ?> </td></tr>
        <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Цена: " . $data['price'] . " руб." ?> </td></tr>
        <p><a style="float: right" href="/feedback/?product_id=<?php echo $data['product_id'] ?>">Задать вопрос о товаре</a></p>
    </tr>
</table>
<?php include_once 'products_view.php'; ?>