<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($post['title']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p><?php echo htmlspecialchars($post['content']); ?></p>
    <hr>
    <h2>Respuestas</h2>
    <ul>
        <?php foreach ($responses as $response): ?>
            <li><?php echo htmlspecialchars($response['content']); ?></li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <h3>Agregar una respuesta</h3>
    <form method="POST" action="/tallerFoto/public/response/create/<?php echo $post['id']; ?>"> <!-- Ajuste del enlace -->
        <textarea name="content"></textarea>
        <button type="submit">Responder</button>
    </form>
</body>
</html>
