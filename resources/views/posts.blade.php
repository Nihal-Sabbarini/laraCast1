<!DOCTYPE html>

<title> MY BLOG  </title>
<link rel="stylesheet" href="/app.css">

<body>

<?php foreach($posts as $post) : ?>
<article>
<h1>
    <a href="/posts/<?= $post->slug; ?>" >
        <?= $post->title; ?>
    </a>
</h1>
<div>
    <?= $post->body; ?>
</div>
</article>
<?php endforeach; ?>

</body>
