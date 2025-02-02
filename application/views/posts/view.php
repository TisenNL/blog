<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $post['title']; ?></title>
</head>
<body>
    <h1><?php echo $post['title']; ?></h1>
    <p><?php echo $post['content']; ?></p>
    <a href="<?php echo site_url('posts'); ?>">Back to Posts</a>
</body>
</html>