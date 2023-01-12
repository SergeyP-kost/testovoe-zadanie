<?php

foreach( $data as $row ){
    $name_news = $row['name_news'];
    $text_news = $row['text_news'];
    $date = $row['date'];
}

?>
<h1 align='center'><?php echo 'Подробнее по теме: '. $name_news?></h1>
<a href="/news"><h4 style="margin-right: 20px; float:right">к списку новостей</h4></a>

<table class="col-12">
    <tr>
        <?php
                echo "<tr><td class='unit' style=\"background-color: greenyellow\">Текст новости: $text_news</a></td></tr>";
                echo "<tr><td class='unit' style=\"background-color: aquamarine\">Дата публикации: $date</td></tr>";
        ?>
    </tr>
</table>