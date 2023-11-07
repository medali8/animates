<?php
class Categorie {
   public $id ; 
   public $nom;
  
   
   
   
  

   public static function getAll(){
       
       $db = connect_db();
       $req = "select * from categorie";
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
       $req="select * from categorie where id_cat=$id";
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
 

   public static function insert($cat){
       
       $db=connect_db();
       $req = "insert into categorie (nom_cat)values(:cat)";
       $res= $db->prepare($req);
        $res->bindParam(":cat" ,$cat);

        
       try {
          $resultat = $res->execute();
          
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($id_cat , $nom){
       
       $db=connect_db();
       $req="update categorie 
       set nom_cat=:cat 
       where id_cat=:id";
       $res = $db->prepare($req);
       $res->bindParam(":id_cat" ,$id_cat);
       $res->bindParam(":nom_cat",$nom);
       
       try{
           $res2=$res->execute();
           return $res2 ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($id){
    $db =connect_db();
       $req="delete from categorie where id_cat=$id";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>