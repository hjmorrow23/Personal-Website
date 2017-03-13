<?php 
	
$pageTitle = "Blog";
$pageHeading = "Blog";


// Authenticate via OAuth
$client = new Tumblr\API\Client(
  'cu90nbuWSNBdNUcNbjVdSlFgvLvHmk3aWEFxD0FryzhUE4JNUY',
  '9A7J8q6ffAFBegCLNhxXq13e5G8UZJT36ILJx77nzFz47mu3ER',
  'vbuuh3KG30rmwnBCSnnRz0tnJ8A1pPOrhGDaVyWrEmOi1tZQy2',
  'VcpjrLMix4KbAmG7dJgFfI1yfBEW16xYYeafaswYXLWLgrcJJ5'
);

// Make the request
$client->getBlogPosts('henryjmorrow.tumblr.com', array('type' => 'text', 'filter' => 'html'));

	
include("inc/header.php");	
?>
		
		<!--Body Column in Grid-->
		
		<div class="content">
			<h2 class="section-header">Experience</h2>
				<h3 class="resume-content">Admissions Representative</h3>
					<div class="resume-content">Hope College, Holland, MI, July 2013 - April 2016</div>
					<div class="resume-content">I manage the recruitment efforts for Hope College in the Southwest region of IL. This includes some schools in the city of Chicago. I traveled to the area to personally be present for these recruitment efforts during the Fall and Spring. I also assist the office on the Marketing and Research & Development process teams.</div>
						
				
		</div>
			
<?php include("inc/footer.php"); ?>