<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Institucion Educativa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
        }
        .menu {
            background-color: #4CAF50;
            padding: 10px;
            margin-bottom: 20px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            padding: 8px 15px;
            background-color: #45a049;
        }
        .menu a:hover {
            background-color: #3d8b40;
        }
        .contenido {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .formulario {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
        }
        input[type="text"], input[type="email"] {
            width: 300px;
            padding: 8px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .resultado {
            background-color: #dff0d8;
            padding: 15px;
            border: 1px solid #3c763d;
            color: #3c763d;
            margin-top: 15px;
        }
        .seccion-seleccionada {
            background-color: #d9edf7;
            padding: 15px;
            border: 1px solid #31708f;
            color: #31708f;
        }
    </style>
</head>
<body>

    <h1>Institucion Educativa</h1>
    
    <!-- Menu de navegacion con GET -->
    <div class="menu">
        <a href="index.php?seccion=inicio">Inicio</a>
        <a href="index.php?seccion=unidades">Unidades</a>
        <a href="index.php?seccion=contacto">Contacto</a>
    </div>

    <!-- Mostrar seccion seleccionada con GET -->
    <div class="contenido">
        <?php
        // Verificamos si se recibio el parametro seccion por GET
        if (isset($_GET['seccion'])) {
            $seccion = $_GET['seccion'];
            
            echo '<div class="seccion-seleccionada">';
            echo '<strong>Seccion seleccionada:</strong> ' . $seccion;
            echo '</div>';
            echo '<br>';
            
            // Mostramos contenido segun la seccion
            if ($seccion == 'inicio') {
                echo '<h2>Bienvenido</h2>';
                echo '<p>Esta es la pagina de inicio de nuestra institucion.</p>';
            } 
            else if ($seccion == 'unidades') {
                echo '<h2>Unidades</h2>';
                echo '<p>Unidad 1: Introduccion a PHP</p>';
                echo '<p>Unidad 2: Metodos GET y POST</p>';
                echo '<p>Unidad 3: Bases de datos</p>';
            } 
            else if ($seccion == 'contacto') {
                echo '<h2>Contacto</h2>';
                echo '<p>Telefono: 04-1234567</p>';
                echo '<p>Email: info@institucion.edu.ec</p>';
            }
        } 
        else {
            echo '<p>Seleccione una seccion del menu para navegar.</p>';
        }
        ?>
    </div>

    <!-- Formulario de contacto con POST -->
    <div class="formulario">
        <h2>Formulario de Contacto</h2>
        
        <form method="POST" action="index.php">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br>
            
            <label>Correo electronico:</label><br>
            <input type="email" name="email" required><br>
            
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php
        // Verificamos si se envio el formulario por POST
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            
            echo '<div class="resultado">';
            echo '<strong>Datos recibidos:</strong><br>';
            echo 'Nombre: ' . $nombre . '<br>';
            echo 'Email: ' . $email;
            echo '</div>';
        }
        ?>
    </div>

    <br>
    <p><small>Proyecto PHP - Metodos GET y POST</small></p>

</body>
</html>
