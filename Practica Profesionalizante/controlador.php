<?php>

if(!empty($_POST["btningresar"])){
    if (empty($_POST["correo"]) and empty($_POST["clave"])) {
        echo '<div class="alert alert-danger"> LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario=$_POST["correo"];
        $clave=$_POST["clave"];
        $sql=$conexion->query(" select * from usuario where correo='$correo' and clave='$clave' ");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.html")
        } else {
            echo '<div class="alert alert-danger"> ACCESO DENEGADO</div>';
        }
    }
}
?>