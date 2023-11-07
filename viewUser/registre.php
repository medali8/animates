


<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="regitre.css">
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
                  <a href="about.html">Necklaces</a>
                  <br>
                  <a href="client.html">Stickers</a>
                  <br>
                  
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="../assets/images/menu.png" style=" width: 28px ; height : 20px ;"></span>  
               <div>
                  <ul id="navbar">
                      <li><a class="active" href="index.html">Home</a></li>
                      <li><a href="Shop.html">Shop</a></li>
                      <li><a href="About.html">About</a></li>
                      <li><a href="Contact.html">Contact</a></li>
                      <li><a href="cart.html"> <i class="bi bi-cart2"></i></a></li>
                  </ul>
              </div>
               
               
            </nav>
         </div>
      </div>
	  
	  <br><br>
		
			<div class="singin">
				<h1>Registre Now</h1><br>
				<form action="addUser.php" method=GET>
					<div class="container">
						<div class="row">
							<div class="col">
								<label for="cin"> CIN </label><br>
								<input type="text" id="cin" name="cin" placeholder="" required="">
								<i class="far fa-user"></i>
								</div>
								<div class="col">
								<label for="fn"> First Name </label><br>
								<input type="text"  id="fn" name="fn" placeholder="" required="">
								<i class="fas fa-unlock-alt"></i>
								</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<label for="ln"> Last name </label><br>
								<input id="ln" name="ln" type="text" placeholder="" required="">
								<i class="far fa-user"></i>
								</div>
								<div class="col">
								<label for="city"> City </label><br>
								<input id="city" name="city" type="text" placeholder="" required="">
								<i class="fas fa-unlock-alt"></i>
								</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<label for="email"> Email </label><br>
								<input id="email" type="text" name="email" placeholder="" required="">
								<i class="far fa-user"></i>
								</div>
								<div class="col">
								<label for="pn"> Phone number </label><br>
								<input type="text" id="pn" name="pn" type="text" placeholder="" required="">
								<i class="fas fa-unlock-alt"></i>
								</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<label for="pwd"> Password </label><br>
								<input id="pwd" name="pwd" type="password" placeholder="" required="">
								<i class="far fa-user"></i>
								</div>
								<div class="col">
								<label for="cpwd"> Confirm Password </label><br>
								<input type="password" id="cpwd" name="cpwd" placeholder="" required="">
								<i class="fas fa-unlock-alt"></i>
								</div>
						</div>
					</div>
					
					<br>
					<a href="logtwo.php">You already have account? LogIn</a><br>
					<button>Registre</button>
				
				</form>
			</div>
		</div> 
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
	