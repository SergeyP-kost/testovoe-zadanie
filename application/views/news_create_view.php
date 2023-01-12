<h1 align='center'>Создание новости</h1>
<a href="/news"><h5 style="margin-right: 20px; float:right">назад к списку новостей</h5></a>

<form action="/news/create" method="post">
    <table class="col-6">
        <tr>
        <tr><td><input style="border:3px double greenyellow;" class="text" placeholder="Тема" name="name"><em> *</em></td></tr>
        <tr><td><textarea style="border:3px double aquamarine" name="text" placeholder="Текст"></textarea><em> *</em></td></tr>
        <tr><td><p><input type="submit" value="Отправить" style="margin: 0.2% 0 0 0"></p></td></tr>
        </tr>
    </table>
</form>