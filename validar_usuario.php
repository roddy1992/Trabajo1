<?php

$nombreu = $_POST["nombreu"];
$clave = $_POST["clave"];
$con = $clave;
include('conexion.php');
/* Consulta de mysql con la que indicamos que necesitamos que seleccione
 * *solo los campos que tenga como nombre_administrador el que el formulario
 * *le ha enviado */
$result = mysql_query("SELECT * FROM usuarios WHERE nombreu = '$nombreu'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if ($row = mysql_fetch_array($result)) {
//Si el usuario es correcto ahora validamos su contraseña
    if ($row["clave"] == $con) {
        //Creamos sesión
        session_start();
        //Almacenamos el nombre de usuario en una variable de sesión usuario
        $_SESSION['nombreu'] = $nombreu;
        $tipo = $row['tipo'];
        $nombre = $row['nombrer'];
        $codigoVoF = $row['codigoFoV'];
        $_SESSION['nombreusuario']=$nombre;
        $_SESSION['codigo']=$codigoVoF;
        $_SESSION['valid_tipo'] = $tipo;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
       
        //Redireccionamos a la pagina: index.php
        header("Location: enrutadordepaginas.php");
    } else {
        //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
        ?>
        <script languaje="javascript">
            alert("El Nombre y/o Clave de Usuario es Incorrecto!");
            location.href = "index.html";
        </script>
        <?php

    }
} else {
    //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
    ?>
    <script languaje="javascript">
        alert("El Nombre y/o Clave de Usuario es Incorrecto!");
        location.href = "index.html";
    </script>
    <?php

}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/* Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
 * *necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
 * *programar una aplicación que tendrá muchas visitas ;) . */
mysql_close();
?>
