`<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $oUser->getName() ?> : Мій друг</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1><?php echo $oUser->getName() ?></h1>
        <p>Рік народження: <?php echo $oUser->getYearOfBirth() ?></p>
        <p>Email: <?php echo $oUser->getEmail() ?></p>
        <h2>Пости:</h2>
        <div class="row">
            <?php foreach ($oUser->getPosts() as $post) {?>
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post["text"] ?></h5>
                        <p class="card-text"><?php echo $post["date"] ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <a href="index.php?userlist=1">Список користувачів</a>
    </div>
</body>
</html>`