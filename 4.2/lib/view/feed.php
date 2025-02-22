<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Стрічка постів</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Стрічка постів</h1>
        <div class="row">
            <?php $allPosts = array();
foreach ($aUser  as $oUser ) {
    $posts = $oUser ->getPosts();
    foreach ($posts as $post) {
        $allPosts[] = array('date' => $post['date'], 'text' => $post['text'], 'author' => $oUser ->getName(), 'key' => $oUser ->getKey());
    }
}
usort($allPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
foreach ($allPosts as $post) {?>
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['text'] ?></h5>
                        <p class="card-text">Автор: <a href="index.php?key=<?php echo $post['key'] ?>"><?php echo $post['author'] ?></a> | <?php echo $post['date']?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <a href="index.php?userlist=1">Список користувачів</a>
    </div>
</body>
</html>