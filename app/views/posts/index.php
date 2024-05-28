<!DOCTYPE html>
<html>
<head>
    <title>Foro de Fotografía</title>
</head>
<body>
    <h1>Foro de Fotografía</h1>
    <!--<a href="/tallerFoto/public/post/create">Crear nuevo post</a>-->
    <a href="/tallerFoto/app/views/posts/create.php">Crear nuevo post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <form method="POST" action="/tallerFoto/public/"> <!-- Ajuste del enlace -->
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="hidden" name="i" value="2">
                    <button type="submit"><?= htmlspecialchars($post['title']); ?></button>
                </form>
                <p><?= htmlspecialchars($post['content']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

