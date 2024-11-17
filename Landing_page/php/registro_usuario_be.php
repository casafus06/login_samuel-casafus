<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];

    $into = "INSERT INTO correos(correo) 
             VALUES('$correo')";

     /* verificar que el correo no se repita en la bd */

     $verificar_correo = mysqli_query($conexion, "SELECT * FROM correos where correo='$correo' ");

     if(mysqli_num_rows($verificar_correo) > 0){ 
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta poner otro");
                window.location = "../index.html";
            </script>
       ';
        exit();
     }


    $ejecutar = mysqli_query($conexion, $into);

    if($ejecutar){
        echo'
        <script>
            alert("Se almaceno correctamnete");
            window.location = "../index.html";
        </script>
        
        ';
    }else{
        echo'
        <script>
            alert("oh, ocurrio un error, no se puedo almacenar el usuario");
            window.location = "../index.html";
        </script>
        
        ';
    }
 
    mysqli_close($conexion);
?>