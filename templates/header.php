<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina de mi Portafolio">
    <meta name="author" content="Juan Luis Martinez Mendoza">    

    <title>Portafolio | <?php echo $titulo ?? ''; ?></title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;900&family=Noto+Sans:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="build/css/app.css">

    <script src="https://kit.fontawesome.com/56cf8cd08e.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <link rel="icon" href="build/img/Recurso4x.png">

</head>

<body>

<header class="header hidden">
    <div class="header__grid header__contenedor">

        <div class="logo-barras hidden">
            <div class="mobile-menu" id="mobile-menu"></div>
            <a href="index.php">
                <div class="logo"></div>
            </a>
        </div>

        <nav class="navegacion hidden" id="nav">
            <a class="navegacion__enlaces" id="boton-up" href="#">Inicio</a>
            <a class="navegacion__enlaces" href="#habilidades"><span>|</span> Habilidades</a>
            <a class="navegacion__enlaces" href="#proyectos"><span>|</span> Proyectos</a>
            <a class="navegacion__enlaces" href="#contacto"><span>|</span> Contacto</a>
        </nav>
            
        <a class="botonhead hidden" href="build/doc/Cv-LM.pdf">
            <div class="curriculum"></div> 
            <span>Descargar CV</span>
        </a>

    </div>
</header>
