<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('posts/edit/'.$post['id']); ?>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $post['title']; ?>" /><br />
        <label for="content">Content</label>
        <textarea name="content"><?php echo $post['content']; ?></textarea><br />
        <input type="submit" name="submit" value="Update Post" />
    <?php echo form_close(); ?>
</body>
</html>