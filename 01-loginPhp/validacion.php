<?php
    // validacion de los datos ingresados al login
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];

        // usuario y pass por defecto
        $usuarioDef = "jose";
        $passDef = 1234;


        //validación de inicio sesion
        if($usuario == $usuarioDef && $pass == $passDef){
            echo "Ingreso correcto.";
            session_start();
        }
        else{
            echo "Datos no coinciden.";
            header("Location:index.php");
            exit();
        }
    }

    
    ?>



<?php
//session_start();
?>
