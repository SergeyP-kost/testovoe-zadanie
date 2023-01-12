
<!doctype html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <title>ТабуретычЪ</title>
    </head>
    <body>
        <head>
            <div class="col" align="center">
                <h1 class="col-4" style="font-size: 70px; color: brown; border: 3px double brown; border-radius: 40px; margin-top: 10px;">ТабуретычЪ<a href="/"><img src="/images/label.jpg"></a></h1>
            </div>
        </head>
        <main>
            <div class="container">
                <div id="content">
                        <?php include 'application/views/'.$content_view; ?>
				</div>
            </div>
        </main>
            <div align='left' style="padding: 20px 20px;">
                <h3>Контакты</h3>
                <ul class="list">
                    <li>telegram: #sanatolp</li>
                    <li>phone: +7 (910) 804-64-33</li>
                    <li>email: sergeyp.sp@yandex.ru</li>
                    <li><a href="/feedback">Обращение в службу поддержки</a></li>
                    <li><a href="/news">Новости</a></li>
                </ul>
            </div>
        <footer align='center'>
            <a href="/">Главная</a> &copy; <?php echo date("Y");?></a> 
        </footer>
    </body>
</html>