<?php
require_once "../model/productModel.php";
require_once "../connection.php";

if (isset($_GET["action"]))
$action = $_GET["action"];
else {
	$action="lister";
}
switch ($action){
    case "lister":
		$product = new Product(); 
		$listeP=$product->getAll();
		require "../Admin/View/listeProduct.php";
		break;
		case "ajout1":
			require "../Admin/View/Addproduct.php";
			break ;
		case "ajout2":
			$lib = $_POST["lib"];
			$prix = $_POST["pp"];
			$qs = $_POST["qs"];
			$up = $_POST["up"];
			$cat = $_POST["cat"];
			Product::insert($lib,$prix,$qs,$up,$cat);
			require_once "../Admin/View/addProd.php";
			break ;
		case "modif1":
			$id = $_REQUEST["id"];
			$p =Product::getById($id); 
			require_once "../Admin/View/updateProd.php";
			break ;
		case "modif2":
			$db=connect_db();
			$id =(int)$_POST["id"];
			$lib=$db->quote($_POST["lp"]);
			$prix=(float)$_POST["pp"];
			$qs=(int)$_POST["qs"];
			$up=$db->quote($_POST["up"]);
			$cat=(int)$_POST["cat"]; 
        	$req="update product 
       	set lib_prod=$lib , prix=$prix , qte_stock=$qs , url_pic=$up , id_cat=$cat
       	where id_prod=$id";
       		try {
       		$res=$db->exec($req);
	   		}catch (PDOException $e){
			die ($e->getMessage());
	   		}  
			require "../Admin/View/update2Prod.php" ;
			break ;
		case "supprimer":
			$id = $_REQUEST["id"];
			$res = Product::delete($id);
			require "../Admin/View/deleteProd.php";
			break ;



	}
		