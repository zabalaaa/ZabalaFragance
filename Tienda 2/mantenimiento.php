<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title> Mantenimiento</title>
</head>
<body>
</div>
    <MAIN>
        <header>
     
            <div class="logo_login">
            <div class="logo">
                <a href="index.php">
                  <img src="imagenes/posible logo.png" alt="icons">
                </a>
            </div>

        </header>

        <div class="mant">
                <center>
              <h2>Mantenimiento</h2><br><br>
         
              <form action="algo.php" method="post">
                <label for="email">Usuario </label> <br>
                <div ><input type="text" id="email" name="email" required class="mailbox" ><br><br></div>
              
                <label for="password">Contraseña </label> <br>
                <div ><input type="password" id="password" name="password" required class="mailbox" ><br><br></div>
              
                <input type="submit" value="Iniciar sesión" class="btn_acceder">
                
              </form><br>
                </center>
        </div>

    </MAIN>

    <?php
    include("algo.php");
    ?>
    
</body>
</html>