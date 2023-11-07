<?php
$id = (int)$_GET["id"];

require_once "../connection.php";
$db=connect_db();
$req = "select * from product where id_prod=$id";
try{
    $res=$db->query($req);
    $prod=$res->fetchObject();
}catch(PDOException $e){
    die($e->getMessage());
}
$urlpic = '.'.$prod->url_pic;


?>


<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="cmd.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "50%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
	</head>
	
	<body>
	<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light">
               <div id="mySidenav" class="sidenav">
                  <a href="" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.html">Figurines</a>
                  <br>
                  <a href="products.html">Hoodies</a>
                  <br>
                  <a href="about.html">Necklace</a>
                  <br>
                  <a href="client.html">Stickers</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="../assets/images/menu.png" style=" width: 28px ; height : 20px ;"></span>  
               <div>
                  <ul id="navbar">
                      <li><a class="active" href="index.html">Home</a></li>
                      <li><a href="Shop.html">Shop</a></li>
                      <li><a href="About.html">About</a></li>
                      <li><a href="Contact.html">Contact</a></li>
					<li><a href="user.html"> <i class="fa-regular fa-user"></i></a></li>  
                      <li><a href="cart.html"> <i class="bi bi-cart2"></i></a></li>
                  </ul>
              </div>
               
               
            </nav>
         </div>
      </div>
	  
     <section id="cmd" style="overflow : hidden;">
         <div class="container-fliud">
            <div class="row">
                <h1 style="margin-left:4%;font-style:italic;font-weight:bold;  ">Anim<span style="color :#088178;text-decoration-line: underline;">ates</span></h1>
            </div>
        </div>
            <br><br>
            <div class="container">
            <div class="row">
                <div class="col-4 text-start">
                    Votre commande
                </div>
                <div class="col-8 text-end">
                    Votre commande Contient 1 produit 
                </div>

            </div>
            
            <hr style="color:#088178;">
            <div class="row">
                <div class="col-3 text-center bet" style="background-color: #088178; border-radius : 10px; color :white ; width:20% ; height :50px;">
                    <p style="margin-top:6%">1. Voir catalogue <i class="bi bi-chevron-double-right"></i></p>
                </div>
                <div class="col-3 text-center bet" style="background-color: #088178; border-radius : 10px; color :white ; width:20% ; height :50px;">
                    <p style="margin-top:6%">2. S'identifier <i class="bi bi-chevron-double-right"></i></p>
                </div>
                <div class="col-3 text-center bet" style="background-color: #088178; border-radius : 10px; color :white ; width:20% ; height :50px;">
                    <p style="margin-top:6%">3. Expédition<i class="bi bi-chevron-double-right"></i></p>
                </div>
                <div class="col-3 text-center bet" style="background-color: #088178; border-radius : 10px; color :white ; width:20% ; height :50px;">
                    <p style="margin-top:6%">4. Paiement<i class="bi bi-chevron-double-right"></i></p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <table border=0 >
                    <thead style="background-color : #00000010;">
                        <th>Produit</th>
                        <th>Description</th>
                        <th>Disponibilité</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </thead>
                    <br>
                        
                        <tbody style="background-color : #00000010;">
                        <td><img src="<?= $urlpic ?>" style="width:80px ; height:85px ; margin-top:5px;"></td>
                        <td><?= $prod->lib_prod; ?></td>
                        <td>En stock&nbsp;<img src="../assets/images/tick.png" style="width:20px ; height:18px;"></td>
                        <td><?= $prod->prix ?>DT</td>
                        <td style="width:180px">
                            <form action="addCommande.php?id=<?= $id ?>&cin=<?= $_GET["cin"]?>" method=POST>
                            <input type="number" id="qt" name="qt" style="width:25% ; border-radius:7px;">
                            <button style="background-color :#088178; color : white ; width:220px; height:34px ; border-radius :10px ; border : none; position:absolute ;margin-top:6%">Passer la commande</button></td>

                            </form>
                        </td>
                        <td>50Dt</td>
                    </tbody>

                 
                            

                    
                </table>
            </div>
            
         </div>


      </section>