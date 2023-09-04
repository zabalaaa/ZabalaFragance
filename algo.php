<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $email = $_POST["email"];
     $password = $_POST["password"];
        if ($email == $password){
            header('Location: iniciar.php');
        }else{
            echo("Error, intentalo de nuevo");
        }
}
?>
