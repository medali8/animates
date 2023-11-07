<?php
require_once "../connection.php";
$db=connect_db();
$id = $_GET["id"];
$cin = $_GET["cin"];
$qt= $_POST["qt"];
$req = "select * from product where id_prod=$id";
$res=$db->query($req);
$prix =($res->fetchObject()->prix);
$tot = $prix*$qt ;
$req2= "insert into commande (id_prod ,cin_cl ,prix_unit ,qte ,prix_tot) values ($id , '$cin' ,$prix , $qt , $tot)";
try {
    $res2=$db->exec($req2);
    if ($res2){
        echo "commande ajoute";
    }
}catch(PDOException $e){
    die ($e->getMessage());
}


?>