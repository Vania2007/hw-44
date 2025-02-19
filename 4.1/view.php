<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Введіть своє ім'я:</h2>
        <form action="controller.php" method="post">
            Ваше ім'я: <input type=text name="new[name]"><br/> Коментар:<br/>
            <textarea name="new[text]" cols="60" rows="5"></textarea>
            <br/> <input type="submit" name="doAdd" value="Додати!">
        </form>
        <h2>Гостевая книга:</h2>
        <?php if(is_array($Book) && count($Book) > 0){
         foreach ($Book as $id => $v) {?>
            Час: <?=date("d.m.Y H:i:s", $id)?><br/>
            Ім'я: <?=$v['name']?><br/>
            Коментар:<br/>
            <?=nl2br($v['text'])?><hr/>
        <?php }}?>
</body>
</html>