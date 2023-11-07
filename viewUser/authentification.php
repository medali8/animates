<?php
session_start();
require_once "../Model/userModel.php";
require_once "../connection.php";
$c = $_GET["cin"];
$p = $_GET["pwd"];
$user = new User();
if ($user->authent($c,$p)==true){
    $session["cin"]=$c;
    header('Location: ../index.php?cin='.$session["cin"]);
}
else {
    ?>
    <script>
     alert("le mot de passe ou CIN est incorrecte !!");
     </script>
     <?php
    //  header('Location: registre.php');
}

?>