<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="logtwo.css">
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
	  <br><br><br><br>
		 <section class="main" style="margin-left: 22%;">
			<div class="logo">
			</div>
			<div class="singin">
				<h1>WELCOME</h1>
				<p>Sign in your account</p>
				<form action="authentification.php" method=GET>
					<label> CIN :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
					<input type="text" placeholder="Enter your CIN :" id="cin" name="cin" required>
					<i class="far fa-user"></i>
					<label> Password :</label>
					<input type="password" placeholder="********" id="pwd" name="pwd" required >
					<i class="fas fa-unlock-alt"></i>
					<a href="registre.php">Forget to registre? join now</a><br>
					<button>Login</button>
				</form>
			</div>
		</section>
		<br><br><br><br>
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
	