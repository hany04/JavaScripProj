<!DOCTYPE html>
 <html>
	<head>
		<title>AstroStore - HTML - CSS (Header)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="icon" type="images/png" href="..\images\products\logoastro.png">
	</head>
<body>

	<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            $conn = mysqli_connect($servername, $username, $password);
            
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
    ?>
		
	<div class="Conteneur">
		<div class="colonne1"></div>
		<div class="colonne2">
			<div class="" style="width: 100%;">
				<div class="container">
					<div class="">
						<div class="social_icon">
							<a href="https://facebook.com" target="_blank"><img class="imgHeader" src="images/icons/facebook_icon.svg"></a>
							<a href="https://twitter.com" target="_blank"><img class="imgHeader" src="images/icons/twitter_icon.svg"></a>
							<a href="https://instagram.com" target="_blank"><img class="imgHeader" src="images/icons/instagram_icon.svg"></a>
							<a href="https://linkedin.com" target="_blank"><img class="imgHeader" src="images/icons/linkedin_icon.svg"></a>
						</div>
						
						<div class="header_right">
						<?php if(isset($_SESSION['user_id'])) { ?>
						
							<div class="login_register_btn">
								<a href="html\login.html" class="btn" onclick="window.location='html/login.html'">Login</a>     
								<a href="html\register.html" class="btn" onclick="window.location='html/register.html'">Register</a>    
							</div>

							<?php } else { ?>
								<div class="login_register_btn">
								<a href="html/login.html" class="btn"  onclick="window.location='html/login.html'">Logout</a>     
							</div>
								<?php }  ?>

						</div>

						<div class="header_right">
						<?php?>
						
							<div >
								<a href="html\Panier.html" class="btn" onclick="window.location='html/Panier.html'">Panier</a>     
							</div>

							<?php ?>
							

						</div>
			
					</div>
					<div class="header">
						<div class="container">
							<div  class="logo">
								<a href="#"><img class="imgLogo" src="..\images\products\logoastro.png"></a>
							</div>
							<div class="navbar">
								<ul>
									<li class="active"><a href="index.php">Accueil</a></li>
									<li><a href="html\products.html">Produits</a></li>   
									<li><a href="html\offres.html">Offres</a></li>
									<li><a href="html\agences.html">Nos agences</a></li>
									<li><a href="html\contacts.html">Contacts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="bodySlider">
					
				<div class="slideshow-container">
					
					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img class="imgSlider" src="images\gi.gif" style="width:100%">
						
					</div>
					
					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img class="imgSlider" src="images/giphy.webp" style="width:100%">
						
					</div>
					
					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img class="imgSlider" src="..\images\astrologo.jpg" style="width:100%">
						
					</div>
					
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
						
				</div>
				<br>
				
				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
				</div>
			
			
			</div>
			
			<div class="myOffersText">
	
			<h3>Nos Meilleur <span>produits</span> </h3>
			</div>
				
			<div class="row">

				<div class="column">
					<div class="divImgProduct"> <img class="imgProduct" src="images\SmartbracletteM6.jpg"> </div>
					<div class="priceProduct">
						<label for="html">Smart Braclette "M6"</label><br>
						<label for="html">50 TND DA</label><br>
					</div>
					<div class="selectProduct"> <a href="#" class="btn selectProduct">Ajouter au panier</a></div>
				</div>
				
				<div class="column"> 
					<div class="divImgProduct"> <div class=""> <img class="imgProduct" src="images\Smartwatch.jpg"> </div></div>
					<div class="priceProduct">
						<label for="html">Smart watch "W26"</label><br>
						<label for="html">124 TND</label><br>
					</div>
					<div class="selectProduct"> <a href="#" class="btn selectProduct">Ajouter au panier</a></div>
				</div>
				
				<div class="column"> 
					<div class="divImgProduct"> <div class=""> <img class="imgProduct" src="images\casque.jpg"> </div></div>
					<div class="priceProduct">
						<label for="html">Ninja Gaming</label><br>
						<label for="html">74 TND</label><br>
					</div>
					<div class="selectProduct"> <a href="#" class="btn selectProduct">Ajouter au panier</a></div>
				</div>
			
			</div>
		
			<footer class="footer-distributed">
				<div class="footer-left">
				
	             <h3>Astro<span>Store</span></h3>

				<p class="footer-links">
					<a href="#">Acceuil</a>
					·
					<a href="#">Produits</a>
					·
					<a href="#">Nos agences</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Copyrights @2024</p>

				<div class="footer-icons">

					<a href="https://facebook.com" target="_blank"><img class="imgHeader" src="images/icons/facebook_icon.svg"></a>
					<a href="https://twitter.com" target="_blank"><img class="imgHeader" src="images/icons/twitter_icon.svg"></a>
					<a href="https://instagram.com" target="_blank"><img class="imgHeader" src="images/icons/instagram_icon.svg"></a>
					<a href="https://linkedin.com" target="_blank"><img class="imgHeader" src="images/icons/linkedin_icon.svg"></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button>envoyer</button>

				</form>

			</div>

		</footer>
		</div>
		
		<div class="colonnes colonne3"></div>
	</div>
	
	
	<script type="text/javascript"> 
	
		var slideIndex = 1;
		showSlides(slideIndex);
		
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
		
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
		
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			
			var dots = document.getElementsByClassName("dot");
			
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
		}
	
           
		  var myIndex = 0;
		  carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 4000); 
		}
     </script>



	
	
</body>
</html>

