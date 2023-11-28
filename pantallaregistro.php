<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilosjuego.css">
    <title>REGISTRATE</title>
  </head>

  <body>
    <header>

        
         
    <form method="post">
      <h4>REGISTRATE PARA RECIBIR NUEVAS NOTICIAS Y PODER JUGAR</h4>
      
      <input class="controls" type="text" name="name" id="nombres" placeholder="Ingrese sus Nombres">
      <input class="controls" type="text" name="apell" id="apellidos" placeholder="Ingrese sus Apellidos">  
      <input class="controls" type="email" name="email" id="correo" placeholder="Ingrese su Correo">
      <input class="controls" type="tel" name="phone" id="telefono" placeholder="Ingrese su teléfono">
    
      
      <input class="botons" type="submit" name="register" value="Registrar">
    
    </form>
 
    <?php 
      include("registro.php");
    ?>

    </header>
   
  </body>
</html>
