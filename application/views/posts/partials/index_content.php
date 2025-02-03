<h1>Blog Posts</h1>
<a href="<?php echo site_url('posts/create'); ?>">Create New Post</a>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['content']; ?></p>
            <a href="<?php echo site_url('posts/view/'.$post['id']); ?>">View</a>
            <a href="<?php echo site_url('posts/edit/'.$post['id']); ?>">Edit</a>
            <a href="<?php echo site_url('posts/delete/'.$post['id']); ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>