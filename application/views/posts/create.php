<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('posts/create'); ?>
        <label for="title">Title</label>
        <input type="text" name='title' /><br />
        <label for="content">Content</label>
        <textarea name="content"></textarea><br />
        <input type="submit" name="submit" value="Create Post" />
    <?php echo form_close(); ?>
</body>
</html>