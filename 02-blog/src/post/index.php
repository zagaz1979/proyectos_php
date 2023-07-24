<?php

    use Zagaz\Blog\model\Post;

    $post = new Post($postName . '.md');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi primer post</h1>

    <?php

        $post->getContent();

        /*
        $posts = Post::getPosts();

        foreach ($posts as $post) {
            echo "<div> <a href='{$post->getUrl()}'> {$post->getFileName()} </a> </div>";
            //echo "<div> {$post->getFileName()} </div>";
        }
        */

        //$post = new Post('test.md');
        //$post->getContent();
    ?>

</body>
</html>