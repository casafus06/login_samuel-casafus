<?php

    include 'conexion_be.php';


    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //encriptamiento de contraseña
    $contrasena = hash('sha512', $contrasena);

    $into = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
             VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

     /* verificar que el correo no se repita en la bd */

     $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios where correo='$correo' ");

     if(mysqli_num_rows($verificar_correo) > 0){ 
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta poner otro");
                window.location = "../index.php";
            </script>
       ';
        exit();
     }

     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario' ");

     if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
            <script>
                alert("Este usurio ya esta registrado, intenta poner otro");
                window.location = "../index.php";
            </script>
       ';
        exit();
     }


    $ejecutar = mysqli_query($conexion, $into);

    if($ejecutar){
        echo'
        <script>
            alert("Se almaceno correctamnete");
            window.location = "../index.php";
        </script>
        
        ';
    }else{
        echo'
        <script>
            alert("oh, ocurrio un error, no se puedo almacenar el usuario");
            window.location = "../index.php";
        </script>
        
        ';
    }
 
    mysqli_close($conexion);
?>