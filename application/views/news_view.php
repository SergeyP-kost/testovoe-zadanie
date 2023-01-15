<h1 align='center'>Новости</h1>

<a href="/news/create"><h5 style="margin-right: 20px; float:right">добавить новость</h5></a>


<table class="col-12">
    <tr>
        <?php

            foreach($data as $key => $value) {
                echo "<tr><td class='unit' style=\"background-color: greenyellow\">Тема: <a href='/news/card/?index=$key'>$value[0]</a></td></tr>";
                echo "<tr><td class='unit' style=\"background-color: aquamarine\">Дата публикации: $value[2]</td></tr>";
            }   
        ?>
    </tr>
</table>