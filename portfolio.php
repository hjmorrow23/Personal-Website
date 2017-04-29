<?php 
include("inc/project-data.php");
include("inc/functions.php");
	
$pageTitle = "Portfolio";
$pageHeading = "Portfolio";

	
include("inc/header.php");	
?>

	<div class="content">
		<h1 class="content-header">Projects</h1>		
		<div class="project-container">
			<?php $portfolio = array_category($project);
            foreach ($portfolio as $id) {
                echo get_item_html($id,$project[$id]);
            }
            ?>
<!--
			<div class="photo-container">
				<div class="photo">
				  <img src="img/home.jpg" alt="Petunia the pug">	
				  <div class="photo-overlay">
					  <h3>Petunia the Pug</h3>
					  <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					  <a href="#" class="button">download</a>
					</div>
				</div>
			</div>
			<div class="photo-container">
				<div class="photo">
				  <img src="img/kitten.jpg" alt="An awesome picture">	
				  <div class="photo-overlay">
					  <h3>Red Facade</h3>
					  <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					  <a href="#" class="button">download</a>
					</div>
				</div>
			</div>
			<div class="photo-container">
				<div class="photo">
				  <img src="img/office.jpg" alt="A ferris wheel">	
				  <div class="photo-overlay">
					  <h3>Ferris Wheel</h3>
					  <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					  <a href="#" class="button">download</a>
					</div>
				</div>
			</div>	
-->	
		</div>
		
		<div class="break">
          <hr>
        </div>
        <h1 class="content-header">Need help?</h1>
        <div class="hire" class="content-action">
	        <a href="contact.php">Contact Me</a>
	    </div>

<?php include("inc/footer.php"); ?>