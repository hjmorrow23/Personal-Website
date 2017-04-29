<?php 
include("inc/project-data.php");
include("inc/functions.php");
	
$pageTitle = "Home";
$pageHeading = "Henry Morrow";
$pageHeadingLink = "Resume";
$pageHeadingLinkUrl = "resume.php";

	
include("inc/header.php");	
?>
	
		<!--Page Body Content-->
		<div class="content">
			<div class="">
				<div class="section-content">
					<h2 class="content-header">A Little Intro</h2>
					<div class="intro-content">
					  <p>I truly enjoy connecting clients with an opportunity that can help them reach their future goals! I also have a passion for learning about technology and ways it can be used to help make life easier. This drive led me to learn coding and build this site. I also have skills in recruiting, human resources and outside sales. Feel free to reach out to find out how I can be an asset to your organization!</p>
			        </div>
			    </div>
			        <div class="break">
			          <hr>
			        </div>
			        <h2 class="content-header">Projects</h2>		
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
					<div class="section-content">
						<div class="hire">
				        	<a href="portfolio.php" id="more-projects">More Projects</a>
				    	</div>
					</div>
			        <div class="break">
			          <hr>
			        </div>
			        <h1 class="content-header">Need help?</h1>
			        <div class="hire">
			        	<a href="contact.php">Contact Me</a>
			    	</div>
			</div>
		</div>	
		
<?php include("inc/footer.php"); ?>