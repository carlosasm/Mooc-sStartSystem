<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Sitio de Gestión de Datos Empresariales</title>
        <meta name="description" content="Esto es un ejemplo de un sitio web para el curso de Lenguajes"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <script type="text/javascript" src="public/js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="public\css\styleIcons.css"/>
        <link rel="stylesheet" type="text/css" href="public\css\styleTables.css"/>
        <link rel="stylesheet" type="text/css" href="public\css\styleHeaders.css"/>
        <link rel="stylesheet" type="text/css" href="public\css\styleBase.css"/>
        <link rel="stylesheet" type="text/css" href="public\css\styleForms.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script type="text/javascript" src="public/js/ProductAPI.js"></script>
        <script type="text/javascript" src="public/js/loginAjax.js"></script>
        <!--<script src="public/js/bootstrap.js"></script>
        <link rel="stylesheet" href="public/css/bootstrap.css">
-->
        <?php
        require_once 'public/scripts.php';
        ?>
      
      
      
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavBar">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="?controlador=User&accion=inicio_sesion">Moocs Systems's</a>
                    
                    <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="navbar-nav"> 
                        <li class="nav-item" ><a class="nav-link" href="?controlador=Product&accion=call_listar">  Ejemplo Api</a></li>
                        <li class="nav-item"><a class="nav-link" href="?controlador=Product&accion=showRegisterProduct" >  Ejemplo Registro</a></li>

                    </ul>      
                     </div>       
                </nav>
        </header>
        
        <section id="contenido">
            <section id="principal">
               
        
   
    