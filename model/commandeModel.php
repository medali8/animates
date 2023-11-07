<?php
class Commande {
   public $id_cmd ; 
   public $id_prod;
   public $cin_cl;
   public $prix_unit;
   public $qte;
   public $prixtot;
   
   
   
  

   public static function getAll(){

       $db = connect_db();
       $req = "select * from commande";
       $listeCmd = [];
       try {
           $res = $db->query($req);
           $listeCmd = $res->fetchAll(PDO::FETCH_OBJ);
       }catch (PDOExecption $e){
           die ($e->getMessage());
       }
       return $listeCmd ;
   }
   public static function getById($id){
       $db = connect_db();
       $req="select * from commande where id_cmd=$id";
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
 

   public static function insert($id_prod,$cin_cl,$prix_unit,$qte,$prix_tot){
       
       $db=connect_db();
       $req = "insert into commande (id_prod, cin_cl , prix_unit , qte , prix_tot )values(:id_prod , :cin_cl , :prix_unit , :qte , :prix_tot )";
       $res= $db->prepare($req);
        $res->bindParam(":id_prod" ,$id_prod);
        $res->bindParam(":cin_cl",$cin_cl);
        $res->bindParam(":prix_unit",$prix_unit);
        $res->bindParam(":qte",$qte);
        $res->bindParam(":prix_tot",$prix_tot);
        
       try {
          $resultat = $res->execute();
          
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($id , $id_prod , $cin_cl , $prixunit , $qte , $prixtot){
       
       $db=connect_db();
       $req="update commande 
       set id_prod=:id_prod , cin_cl=:cin_cl , qte=:qte , prix_unit=:prix_unit, prix_tot=:prix_tot
       where id_cmd=:id";
       $res = $db->prepare($req);
       $res->bindParam(":id_prod" ,$id_prod);
       $res->bindParam(":cin_cl",$cin_cl);
       $res->bindParam(":prix_unit",$prixunit);
       $res->bindParam(":qte",$qte);
       $res->bindParam(":prix_tot",$prixtot);
       $res->bindParam(":id",$id);
       try{
           $res2=$res->execute();
           return $res2 ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($id){
    $db =connect_db();
       $req="delete from commande where id_cmd=$id";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>