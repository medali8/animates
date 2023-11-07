<?php
class Product {
   public $id ; 
   public $lib;
   public $prix;
   public $qte ;
   public $urlpic;
   public $idcat;
   
   
   
  

   public function getAll(){
       
       $db = connect_db();
       $req = "select * from product";
       $liste = [];
       try {
           $res = $db->query($req);
           $liste = $res->fetchAll(PDO::FETCH_OBJ);
       }catch (PDOExecption $e){
           die ($e->getMessage());
       }
       return $liste ;
   }
   public static function getById($id){
       $db = connect_db();
       $req="select * from product where id_prod=$id";
       try {
           $res=$db->query($req);
           if ($res->rowCount()==1){
               $prod = $res->fetchObject();
               return $prod;
           }
           else {
               return false ;
           }
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
 

   public static function insert($lib , $prix , $qte , $urlpic , $idcat){
       
       $db=connect_db();
       $req = "insert into product (lib_prod , prix , qte_stock , url_pic , id_cat )values(:lib , :prix , :qte , :urlpic , :idcat )";
       $res= $db->prepare($req);
        $res->bindParam(":lib" ,$lib);
        $res->bindParam(":prix",$prix);
        $res->bindParam(":qte",$qte);
        $res->bindParam(":urlpic",$urlpic);
        $res->bindParam(":idcat",$idcat);
        
       try {
          $resultat = $res->execute();
          
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($id , $lib , $prix , $qte , $urlpic , $idcat){
       
       $db=connect_db();
       $req="update product 
       set lib_prod=:lib , prix=:prix , qte_stock=:qte , url_pic=:url , id_cat=:idcat
       where id_prod=:id";
       $res = $db->prepare($req);
       $res->bindParam(":lib" ,$lib);
       $res->bindParam(":prix",$prix);
       $res->bindParam(":qte",$qte);
       $res->bindParam(":url",$urlpic);
       $res->bindParam(":idcat",$idcat);
       $res->bindParam(":id_prod",$id);
       try{
           $res2=$res->execute();
           return $res2 ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($id){
    $db =connect_db();
       $req="delete from product where id_prod=$id";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>