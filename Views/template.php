<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jose Camino</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="jquery/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
    <link rel="stylesheet" type="text/css" href="jquery/demo/demo.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="flex flex-col min-h-screen ">
    <div class="grow">
        <header class="flex justify-center w-full headerUta">
            <img src="../../images/headerUta.jpg" alt="header_Uta" class="w-full ">
        </header>
        <nav>
        <ul class="flex justify-center bg-red-800 py-4 ">
    <li class="mr-6">
        <a class="text-white hover:text-slate-200" href="index.php?action=inicio">Inicio</a>
    </li>
    <li class="mr-6">
        <a class="text-white hover:text-slate-200" href="index.php?action=nosotros">Nosotros</a>
    </li>
    <li class="mr-6">
        <a class="text-white hover:text-slate-200" href="index.php?action=contacto">Contacto</a>
    </li>
    <li class="mr-6">
        <a class="text-white hover:text-slate-200" href="index.php?action=servicios">Servicios</a>
    </li>
</ul>
        </nav>

        <section>
            <?php 
            require_once "Controllers/controller.php";
            $mvc = new MvcController();
            $mvc->enlacesPaginasController();
            ?>
        </section>


    </div>
    <footer class="text-center bg-red-800 text-white py-4">
        <p>Derechos reservados</p>
    </footer>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>