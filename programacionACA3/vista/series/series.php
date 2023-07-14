<!DOCTYPE html>
<html>
<head>
    <title>Hobby de leer</title>
</head>
<body>
    <h1>Hobby de leer</h1>
    
    <h2>Libros recomendados</h2>

    <ul>
        <li>Introducción a los sistemas informáticos</li>
        <li>Lógica Matemática</li>
        <li>Circuitos básicos </li>
        <li>Informática y convergencia tecnológica</li>
        <li>Pensamiento cunista</li>
    </ul>
    
    <h2>Agregar un nuevo libro</h2>
    <form action="agregar_libro.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required><br>
        
        <label for="anio">Año de publicación:</label>
        <input type="number" id="anio" name="anio" required><br>
        
        <input type="submit" value="Agregar libro">
    </form>
</body>
</html>
