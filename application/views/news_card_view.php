<?php

    $name = $data['name'];
    $text = $data['text'];
    $date = $data['date'];
    
?>
<h1 align='center'><?php echo 'Подробнее по теме: '. $name?></h1>
<a href="/news"><h5 style="margin-right: 20px; float:right">назад к списку новостей</h5></a>

<table class="col-12">
    <tr>
        <tr><td class='unit' style="background-color: greenyellow">Текст новости: <?php echo $text ?></a></td></tr>
        <tr><td class='unit' style="background-color: aquamarine">Дата публикации: <?php echo $date ?></td></tr>
    </tr>
</table>