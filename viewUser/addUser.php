<?php 
require_once "../Model/userModel.php";
require_once "../connection.php";
$cin = $_GET["cin"];
$fname = $_GET["fn"];
$lname = $_GET["ln"];
$city = $_GET["city"];
$email= $_GET["email"];
$pn=$_GET["pn"];
$pwd=$_GET["pwd"];
$u = new User();
if ($u->getById($cin)=== false){
    $u->insert($cin , $fname , $lname ,$city , $email,$pn , $pwd);
    ?>
    <script>
        location.replace("../index.php");
    </script>
    <?php
}
else {
    ?>
    <script>
        alert("Ce compte deja existe !!");
        location.replace("../index.php");
    </script>
    <?php
}


?>