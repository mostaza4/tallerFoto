<!DOCTYPE html>
<html>
<head>
    <title>Crear Nuevo Post</title>
</head>
<body>
    <h1>Crear Nuevo Post</h1>
    <form method="POST" action="/tallerFoto/public/index.php"> <!-- Ajuste del enlace -->
        <label for="title">Título</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" required></textarea>
        <input type="hidden" name="i" value="1">
        <button type="submit">Crear</button>
    </form>
</body>
</html>
