<?php
require_once "../model/userModel.php";
require_once "../connection.php";

	
$action = $_REQUEST["action"];
switch ($action){
    case "lister":
		$listeClient=User::getAll();
		require "../Admin/ViewClient/listClient.php";
		break;
		
		case "modif1":
			$id = $_REQUEST["id"];
			$c =User::getById($id); 
			require_once "../Admin/ViewClient/updateClient.php";
			break ;
		case "modif2":
			$db=connect_db();
			$cin=$db->quote($_POST["cin"]);
            $nom=$db->quote($_POST["nom"]);
			$pren=$db->quote($_POST["pren"]);
			$add=$db->quote($_POST["add"]);
			$mail=$db->quote($_POST["mail"]);
			$nt=$db->quote($_POST["nt"]);
        	$req="update user
       	    set nom=$nom , prenom=$pren , adresse=$add , email=$mail ,numtel=$nt
       	    where cin=$cin";
       		try {
       		$res=$db->exec($req);
	   		}catch (PDOException $e){
			die ($e->getMessage());
	   		}  
			require "../Admin/ViewClient/update2Client.php" ;
			break ;
		case "supprimer":
			$cin = $_REQUEST["id"];
			$res = User::delete($cin);
			require "../Admin/ViewClient/deleteClient.php";
			break ;



	}
		