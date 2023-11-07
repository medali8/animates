<?php
class User {
   public $cin ; 
   public $nom ;
   public $prenom;
   public $adresse ;
   public $email;
   public $numtel;
   public $pwd;
   
   
   public function __construct($cin=null , $nom=null , $prenom=null , $adresse=null , $email=null , $numtel=null , $pwd=null){
        $this->cin = $cin;
        $this->nom = $nom;   
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->numtel = $numtel;
        $this->pwd = $pwd;
       
   }

   public static function getAll(){
       
       $db = connect_db();
       $req = "select * from user";
       $liste = [];
       try {
           $res = $db->query($req);
           $liste = $res->fetchAll(PDO::FETCH_OBJ);
       }catch (PDOExecption $e){
           die ($e->getMessage());
       }
       return $liste ;
   }
   public static function getById($cin){
       $db = connect_db();
       $req="select * from user where cin=$cin";
       try {
           $res=$db->query($req);
           if ($res->rowCount()==1){
               $user = $res->fetchObject();
               return $user;
           }
           else {
               return false ;
           }
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
   public function authent($cin,$pwd){
    $db = connect_db();
    $req="select * from user where cin='$cin' and pwd='$pwd'";
    try {
        $res=$db->query($req);
        if ($res->rowCount()==1){
            return true ;
        }
        else {
            return false ;
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}

   public static function insert($cin ,$nom , $prenom , $adresse , $email , $numtel , $pwd){
       
       $db=connect_db();
       $req = "insert into user (cin , nom , prenom , adresse , email , numtel , pwd )values(:cin , :nom , :prenom , :adresse , :email , :numtel , :pwd)";
       $res= $db->prepare($req);
        $res->bindParam(":cin" ,$cin);
        $res->bindParam(":nom",$nom);
        $res->bindParam(":prenom",$prenom);
        $res->bindParam(":adresse",$adresse);
        $res->bindParam(":email",$email);
        $res->bindParam(":numtel",$numtel);
        $res->bindParam(":pwd",$pwd);
       try {
          $resultat = $res->execute();
          if ($resultat){
               return $db->LastInsertId();
          }
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($cin ,$nom , $prenom , $adresse , $email , $numtel ){
       
       $db=connect_db();
       $req="update user 
       set nom=:nom ,prenom=:prenom ,adresse=:adresse ,email=:email ,numtel=:numtel 
       where cin=:cin";
       $res = $db->prepare($req);
       $res->bindParam(":cin" ,$cin);
       $res->bindParam(":nom",$nom);
       $res->bindParam(":prenom",$prenom);
       $res->bindParam(":adresse",$adresse);
       $res->bindParam(":email",$email);
       $res->bindParam(":numtel",$numtel);
       
       try{
           $res=$prep->execute();
           return $res ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($cin){
    $db =connect_db();
       $req="delete from user where cin=$cin";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>