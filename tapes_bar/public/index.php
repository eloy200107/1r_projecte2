<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Menú de Navegación en PHP</title>
    <style>
        body {
            background-image: url('fotos/fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }

       
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<div>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
</div>

</body>
</html>
