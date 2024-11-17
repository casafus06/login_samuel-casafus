<?php
 
    session_start();
 
    include 'conexion_be.php';
 
 
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
 
    //Encriptamiento de contraseña
    $contrasena = hash('sha512', $contrasena);
 
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
 
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../Landing_page/index.html");
        exit();
 
    }else{
        echo'
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../Landing_page/index.html";
        </script>
        ';
        exit();
    }
?>