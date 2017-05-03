<?php 
include("inc/project-data.php");
include("inc/functions.php");
	
$pageTitle = "Home";
$pageHeading = "Henry Morrow";
$pageHeadingLink = "Résumé";
$pageHeadingLinkUrl = "resume.php";

	
include("inc/header.php");	
?>
	
		<!--Page Body Content-->
		<div class="content">
			<div class="">
				<div class="section-content">
					<h2 class="content-header">A Little Intro</h2>
					<div class="intro-content">
					  <p>I'm a Front End Web Developer who loves working with and learning about the web. I have a passion for learning about technology and ways it can be used to help make life easier. I'm always happy to connect on what's new in web development, gaming, basketball and how I can help others use the web to accomplish their goals.</p>
			        </div>
			    </div>
<!--
			        <div class="break">
			        </div>
-->
			        <h2 class="content-header"><a href="portfolio.php">Projects</a></h2>		
					<div class="project-sample">
						<?php 
							$portfolio = array_category($project, $title);
							$i = 0;
				            foreach ($portfolio as $id) {
				                echo get_item_html($id,$project[$id]);
				                $i++;
				                if($i==3) break;
				            }			            
			            ?>            
					</div>
<!--
					<div class="section-content">
						<div class="hire">
				        	<a href="portfolio.php" id="more-projects">More Projects</a>
				    	</div>
					</div>
-->
<!--
			        <div class="break">
			          <hr>
			        </div>
-->
			        <h1 class="content-header">Want to connect?</h1>
			        <div class="hire">
			        	<a href="contact.php">Contact Me</a>
			    	</div>
			</div>
		</div>	
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		
<?php include("inc/footer.php"); ?>