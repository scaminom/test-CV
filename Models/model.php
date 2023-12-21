<?php

class EnlacesPaginas {
    public static function enlacePaginas($enlace) {
        if ($enlace == "nosotros" || $enlace == "servicios" || $enlace == "contacto") {
            $module = "Views/Interfaces/".$enlace.".php";
        } else {
            $module = "Views/Interfaces/inicio.php";
        }
        return $module;
    }
}

?>