	<!--Footer-->
		
		<footer class="main-footer">
		 <div>
		   <div class="footer-logo"><img src="IMG/Henrylogo.svg" alt="logo"></div>
		   <div>Henry Morrow</div>
		   
		   <!--Footer Nav-->
		   <div>
			 <ul class="footer-nav">
			   <li><a href="index.php" <?php if($pageTitle == "Home") {echo 'id="select"';} ?>>Home</a></li>
				<li><a href="bio.php" <?php if($pageTitle == "Bio") {echo 'id="select"';} ?>>Bio</a></li>
				<li><a href="portfolio.php" <?php if($pageTitle == "Portfolio") {echo 'id="select"';} ?>>Portfolio</a></li>
				<li><a href="resume.php" <?php if($pageTitle == "Résumé") {echo 'id="select"';} ?>>Résumé</a></li>
				<li><a href="http://blog.henrymorrow.com/wp" <?php if($pageTitle == "Blog") {echo 'id="select"';} ?>>Blog</a></li>
                <li><a href="contact.php" <?php if($pageTitle == "Contact") {echo 'id="select"';} ?>>Contact</a></li>
		   	 </ul>
		   </div>	
			<div id="copyright">&copy;2017 Henry Morrow</div>
			<div class="icon-row"><a href="https://www.facebook.com/henry.morrow1"><img class="footer-icon" src="IMG/whitefacebookembed.svg" alt="Facebook Logo"></a>
	        <a href="https://twitter.com/hj_morrow"><img class="footer-icon" src="IMG/whitetwittericonembed.svg" alt="Twitter Logo"></a> 
	        <a href="https://instagram.com/hj_morrow/"><img class="footer-icon" src="IMG/whiteinstagramiconembed.svg" alt="Instagram Logo"></a>
	        <a href="https://www.linkedin.com/pub/henry-morrow/32/540/65b"><img class="footer-icon" src="IMG/whiteinkediniconembed.svg" alt="LinkedIn Logo"></a>
	        <a href="https://github.com/hjmorrow23"><img class="footer-icon" src="IMG/github.svg" alt="LinkedIn Logo"></a>
	        <a href="http://codepen.io/henryjmorrow/"><img class="footer-icon" src="IMG/codepen.svg" alt="LinkedIn Logo"></a>
	        <a href="mailto:hjmorrow23@gmail.com"><img class="footer-icon" src="IMG/whitemailembed.svg" alt="Email Logo"></a>
	        </div>
		 </div>
		</footer>
		<div class="mobile-nav">
		    <a href="index.php">Home</a>
		    <a href="bio.php">Bio</a>
		    <a href="portfolio.php">Portfolio</a>
		    <a href="resume.php">Résumé</a>
		    <a href="http://blog.henrymorrow.com/wp">Blog</a>
		    <a href="contact.php">Contact</a>
		</div>  
	</div>  
  <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="assets/js/app.js" type="text/javascript" charset="utf-8"></script>
</body>