<?php

include("con_db.php");

if(isset($_POST["btnreg"])) {
    if (strlen($_POST['id_name'] ) >= 1 &&
    strlen($_POST["lastname"]) >= 1 &&
    strlen($_POST['email'])     >= 1 &&
    strlen($_POST['password'])   >= 1 
    //no se que hace esta parte >>> strlen($_POST['register']) >= 1
    ) {

        $name = trim($_POST['id_name']);
        $apellido = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['password']);
        $consulta = "INSERT INTO registrarse( nombre, apellido, email, contraseña) VALUES ('$name','$apellido','$email','$pass')";
        $resultado = mysqli_query($conex, $consulta);
         
        if ($resultado) {
        
           echo("Se han guardado los datos, con exito");
        

        }else{

            ?>
            <h3 class="bad">Malo</h3>
            <?php
        
    }
}

}

?>