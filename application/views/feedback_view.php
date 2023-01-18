<h1 align='center'>Форма обратной связи</h1>
<form action="/feedback" method="post">
    <table class="col-6">
        <tr>
        <tr><td><input style="border:3px double greenyellow;" class="text" name="name" placeholder="Ваше имя" value=<?php echo $data["name"] ?>><em> *</em></td></tr>
        <tr><td><?php if (isset($data["errors"]["name"])) echo $data["errors"]["name"] ?></td></tr>
        <tr><td><input style="border:3px double aquamarine" class="email" name="email" placeholder="Ваш email" value=<?php echo $data["email"] ?>><em> *</em></td></tr>
        <tr><td><?php if (isset($data["errors"]["email"])) echo $data["errors"]["email"] ?></td></tr>
        <tr><td><textarea style="border:3px double aquamarine" name="message" placeholder="Текст cooбщения"><?php echo $data["message"] ?></textarea></td></tr>
        <tr><td><?php if (isset($data["errors"]["message"])) echo $data["errors"]["message"] ?></td></tr>
        <input type="hidden" name="product_id" value="<?php echo $data["product_id"] ?>">
        <tr><td><p><input type="submit" value="Отправить" style="margin: 0.2% 0 0 0"></p></td></tr>
        </tr>
    </table>
</form>

