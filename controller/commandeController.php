<?php
require_once "../model/commandeModel.php";
require_once "../connection.php";

	
$action = $_REQUEST["action"];
switch ($action){
    case "lister":
		$listeCmd=Commande::getAll();
		require "../Admin/ViewCmd/listCmd.php";
		break;
	
		case "modif1":
			$id = $_REQUEST["id"];
			$cmd =Commande::getById($id); 
			require_once "../Admin/ViewCmd/updateCmd.php";
			break ;
		case "modif2":
			$db=connect_db();
			$idp =(int)$_POST["idp"];
			$cinc=$db->quote($_POST["cinc"]);
            $pu =(float)$_POST["pu"];
            $qte =(int)$_POST["qte"];
			$pt =(float)$_POST["pt"];
            $idcmd =(int)$_POST["idcmd"];
        	$req="update commande 
       	    set id_prod=$idp , cin_cl=$cinc , prix_unit=$pu , qte=$qte ,prix_tot=$pt
       	    where id_cmd=$idcmd";
       		try {
       		$res=$db->exec($req);
	   		}catch (PDOException $e){
			die ($e->getMessage());
	   		}  
			require "../Admin/ViewCmd/update2Cmd.php" ;
			break ;
		case "supprimer":
			$id = $_REQUEST["id"];
			$res = Commande::delete($id);
			require "../Admin/ViewCmd/deleteCmd.php";
			break ;



	}
		