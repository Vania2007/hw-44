<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Мої друзі</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Мої друзі</h1>
        <div class="row">
            <?php foreach ($aUser as $oUser) { ?>
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="index.php?key=<?php echo $oUser->getKey() ?>"><?php echo $oUser->getName() ?></a></h5>
                        <p class="card-text">Рік народження: <?php echo $oUser->getYearOfBirth() ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <p><a href="index.php">Стрічка постів</a></p>
    </div>
</body>
</html>