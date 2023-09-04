<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro || ROCKSTAR ★</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
      <header>  
        <div class="logo_login">
            <div class="logo">
                <a href="index.php">
                  <img src="imagenes/posible logo.png" alt="icons">
                </a>
            </div>
      
            <div class="login">
                <a href="Cuenta.html"> 
                    <img src="imagenes//icon_Login_blanco.png" alt="icons">
                </a>
            </div>    

            <div class="carrito">
                <a href="Carro.html">
                    <img src="imagenes/icono_carrito.png" alt="">
                 </a>  
              </div>
        </div>

      </header>

      <section>
        <div class="registro">
            
        <h1>Crear Cuenta</h1>

         <form action = "registrar.php"  method="post">
            <label for="name">Nombres </label> <br>
            <div ><input type="name" id="name" name="id_name" required class="mailbox1" ><br><br></div>

            <label for="lastname">Apellidos </label> <br>
            <div> <input type="lastname" id="lastname" name="lastname" required class="mailbox1"> <br><br></div>

            <label for="email">Email </label> <br>
            <div> <input type="email" id="email" name="email" required class="mailbox1"> <br><br></div>

            
            <label for="password">Contraseña</label>
            <div> <input type="password" id="password" name="password" required class="mailbox1"> <br> <br></div>
             
             <p class="term">Al crear una cuenta, acepta la Política de privacidad y los Términos y condiciones de Rockstar.</p>
               <div >
                
                <button class="btnreg" name ="btnreg"><h4>Registrarse</h4></button>
                 
              </div>
         </form>
         <?php
         include("registrar.php");
         ?>
    </div>
      </section>

    </main>
</body>
</html>