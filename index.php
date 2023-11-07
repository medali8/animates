<?php
require_once "connection.php";
$db = connect_db();
$req = "select * from categorie";
try{
  $res = $db->query($req);
}catch(PDOEception $e){
  die ($e->getMessage) ;
}
$req2 = "SELECT id_prod,lib_prod,prix,url_pic,nom_cat from product as p , categorie as c where p.id_cat = c.id_cat;";
try{
  $res2 = $db->query($req2);
}catch (PDOException $e2){
  die($e2->getMessage());
}


?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>website </title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet"type="text/css"href="./assets/css/homepage.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
                  <?php
                  while ($cat = $res->fetchObject()){
                    echo "<a href='productByCat.php?idcat=$cat->id_cat'> $cat->nom_cat </a>";
                    echo "<br>";
                  }

                  ?>
                
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="./assets/images/menu.png" style=" width: 28px ; height : 20px ;"></span>  
               <div>
                  <ul id="navbar">
                      <li><a class="active" href="index.html">Home</a></li>
                      <li><a href="#about-head">About</a></li>
					            <li><a href="#products">Products</a></li>
                      <li><a href="#contact">Contact</a></li>
                      <li><a href="./viewUser/logtwo.php"> <i class="fa-regular fa-user"></i></a></li>
					  <li><a href="cart.html"> <i class="bi bi-cart2"></i></a></li>
                  </ul>
              </div>
               
               
            </nav>
         </div>
      </div> 


    <section id="hero">
        <p>Animates<br> <span style="font-size:32px;">At Animates Store, we believe in providing high-quality<br> products that enhance your daily life. </span></p>

    </section>

    <section id="feature" class="section1">
      
        <div class="fe-box">
            <img src="./assets/images/top/q.png" width="235" height="237" />
            <h4> Free Shipping</h4>
        </div>        
        
        <div class="fe-box">
            <img src="./assets/images/top/w.png" width="235" height="237" />
            <h4> Online Order</h4>
        </div>     

        <div class="fe-box">
            <img src="./assets/images/top/t.png" width="235" height="237" />
            <h4> Secure Payment</h4>
        </div>   
        
        <div class="fe-box">
            <img src="./assets/images/top/rr.png" width="235" height="237" />
            <h4> 24/7 Service</h4>
        </div>


    </section>

<section id="page-header" class="aboutus">
        <h4> #KNOW US </h4>
        <h1>Don't Forget To Order Now</h1>

    </section>
	<section id="about-head" class="section-p1">
				<img src="./assets/images/aboutus/sq.jpg" alt="bet">
				<div>
					<h2 style="color: #088178">ArtWear</h2>
					<p>At ArtWear Store, we believe in providing high-quality products that enhance your daily life.
					<br></br>
					Our company was founded in 2023 by a group of like-minded individuals who are passionate about delivering the best products and exceptional customer service.
					<br></br>
					Our mission is to empower our customers by offering innovative and reliable products that simplify their lives and bring joy to their everyday experiences. 
					<br></br>
					Our Values - Quality:
					<br></br>
					- We are committed to delivering products of the highest quality, made to last. <br>
					- Customer Satisfaction: We prioritize our customers' satisfaction and strive to exceed their expectations.
					<br>- Innovation: We continuously innovate to bring new and exciting products to our customers. 
					<br>- Integrity: We conduct our business with honesty, transparency, and ethical practices. 
				
					<br></br>
					
				</div> 
			</section>

            <section id="products" class="bg-light">
                <br>
                <div class="fp">
                   <h1 class="text-center">New Arrivals</h1>
                   <p class="text-center">WINTER IS COMING !! ORDER NOWW</p>
                </div>
                <div class="container">
                   <div class="row">
                   <?php 
                   while ($prod = $res2->fetch()){
                        $id = $prod["id_prod"]; 
                        $imgurl = $prod["url_pic"];
                        $cat = $prod["nom_cat"];
                        $lib = $prod["lib_prod"];
                        $price = $prod["prix"];
                    ?>
                      <div class="col-3">
                         <br>
                         <div class="card">
                            <img src="<?= $imgurl?>" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title"><?= $cat ?></h5>
                              <p class="card-text"><?= $lib ?><br><?= $price."DT" ?></p>
                              <a href="viewUser/commande.php?id=<?= $id ?>&cin=<?php 
                              if (isset($_GET["cin"]))
                              echo $_GET["cin"] ;
                              ?>" class="btn ">Order now</a>
                            </div>
                          </div>
                          
                        
                 </div>
                 <?php 
                          }
                          ?>
                </div>
                <br><br>
                </section>
<br><br><br>

<footer id="contact" class="bg-dark">
    <br><br>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-4 text-center">
                <h3>About us</h3><br>
                <p style="color : white ; font-weight : 600 ; font-size:16">

                    Our company was founded in 2023 by a group of like-minded individuals who are passionate about delivering the best products and exceptional customer service..</p><br>
                <i class="bi bi-facebook" style="color : white ;"></i>&nbsp;&nbsp;
                <i class="bi bi-instagram"></i>&nbsp;&nbsp;
                <i class="bi bi-twitter"></i>&nbsp;&nbsp;
                <i class="bi bi-linkedin"></i>&nbsp;&nbsp;
            </div>  
            <div class="col-4 text-center">
                <h3>Contact Info</h3><br>
                <p class="text-muted text-center">Address:<br></p>
                    <span style="color : white ; font-weight : 600 ; font-size:16">09 Rue Marseille , Ben Arous , Amesterdam</span>
                
                    <p class="text-muted text-center">Phone number:</p>
                    <span style="color : white ; font-weight : 600 ; font-size:16">+1 234 567 890</span>
                 
                
                    <p class="text-muted text-center"> Email:</p>
                    <span style="color : white ; font-weight : 600 ; font-size:16">exemple@suffixe.com</span>
                 
            </div> 
            <div class="col-4 text-center">
                <h3 >Quick link</h3><br>
                    <a href="#" style="color: white ;font-size:16px;font-weight : 600">Home</a><br><br>
                    <a href="#" style="color: #088178 ;font-size:16px;font-weight : 600">Register</a><br><br>
                    <a href="#" style="color: #088178 ;font-size:16px;font-weight : 600">Contact</a><br><br>
                    <a href="#" style="color: #088178 ;font-size:16px;font-weight : 600">About us</a><br></span>
            </div>   
        </div>
        <br><br>
        <div class="row">
            <div  class="col">
               <p class="text-secondary text-center"> © Copyright ©2023 All rights reserved , made by Taher sahbi </p>
            </div>
        </div>
    </div>
</footer>
    
	
	
    
</body>

</html>
