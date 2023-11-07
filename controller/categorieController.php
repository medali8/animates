<?php
require_once "../model/categorieModel.php";
require_once "../connection.php";

	
$action = $_REQUEST["action"];
switch ($action){
    case "lister":
		 
		$listeC=Categorie::getAll();
		require "../Admin/ViewCat/listCategorie.php";
		break;
		case "ajout1":
			require "../Admin/ViewCat/AddCategorie.php";
			break ;
		case "ajout2":
			$cat = $_POST["cat"];
			Categorie::insert($cat);
			require_once "../Admin/ViewCat/addCategorie2.php";
			break ;
		case "modif1":
			$id = $_REQUEST["id"];
			$c =Categorie::getById($id); 
			require_once "../Admin/ViewCat/updateCat.php";
			break ;
		case "modif2":
			$db=connect_db();
			$id =(int)$_POST["id"];
			$cat=$db->quote($_POST["cat"]);
        	$req="update categorie 
       	    set nom_cat=$cat 
       	    where id_cat=$id";
       		try {
       		$res=$db->exec($req);
	   		}catch (PDOException $e){
			die ($e->getMessage());
	   		}  
			require "../Admin/ViewCat/update2Cat.php" ;
			break ;
		case "supprimer":
			$id = $_REQUEST["id"];
			$res = Categorie::delete($id);
			require "../Admin/ViewCat/deleteCat.php";
			break ;



	}
		