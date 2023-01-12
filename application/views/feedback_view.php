<?php
if (!isset($data)){

    echo "<h1 align='center'>Форма обратной связи</h1>";
}
else{
    if ($data["error"] == false){
        echo "<h2>Ваше обращение зарегистрировано:</h2>";
    }
    else{
        echo "<h2>Ваше обращение не зарегистрировано:</h2>";
    }
}
    
?>

<?php  
if (isset($data)){ ?>
    <table class="col-12">
        <tr>
            <tr><td class='unit' style="background-color: greenyellow;"><?php echo "Имя: ".$data['name'] ?> </td></tr>
            <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Почта: ".$data['email'] ?> </td></tr>
            <tr><td class='unit' style="background-color: aquamarine;"><?php echo "Текст сообщения: ".$data['message']?> </td></tr>
        </tr>
    </table>

<?php }
else{ ?>
    <form action="/feedback/feedback" method="post">
        <table class="col-6">
            <tr>
            <tr><td><input style="border:3px double greenyellow;" class="text" placeholder="Ваше имя" name="name"><em> *</em></td></tr>
            <tr><td><input style="border:3px double aquamarine" class="email" placeholder="Ваша почта" name="email"><em> *</em></td></tr>
            <tr><td><textarea style="border:3px double aquamarine" name="message" placeholder="Текст cooбщения"></textarea></td></tr>
            <tr><td><p><input type="submit" value="Отправить" style="margin: 0.2% 0 0 0"></p></td></tr>
            </tr>
        </table>
    </form>
<?php } ?>
