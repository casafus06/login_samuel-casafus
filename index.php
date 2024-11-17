<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: bienvenido.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="assets/CSS/estilos.css" />
  </head>
  <body>
    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar a la página</p>
            <button id="btn__iniciar-sesion">Iniciar sesión</button>
          </div>
          <div class="caja__trasera-register">
            <h3>¿No tienes una cuenta?</h3>
            <p>Registrate para entrar a la página</p>
            <button id="btn__Registrate">Registrate</button>
          </div>
        </div>
        <!-- Formulario de login y registro -->
        <div class="contenedor__login-register">
            <!-- Login -->
          <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <h2>Iniciar sesión</h2>
            <input type="email" placeholder="Correo Electronico" name="correo" required/>
            <input type="password" placeholder="Contraseña"  name="contrasena" required/> 
            <button>Entrar</button>            
          </form>
          <!-- Registro -->
          <form action="php/registro_usuario_be.php" method="post" class="formulario__register">
            <h2>Registrate</h2>
            <input type="text" placeholder="Nombre Completo" name="nombre_completo" required/>
            <input type="email" placeholder="Correo Electronico" name="correo" required/>
            <input type="text" placeholder="Usuario" name="usuario" required/>
            <input type="password" placeholder="Contraseña" name="contrasena" required/>
            <button>Registrate</button>
          </form>
        </div>
      </div>
    </main>
    <script src="assets/js/script.js"></script>
  </body>
</html>