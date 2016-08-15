<?php 
include("inc/project-data.php");
include("inc/functions.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($project[$id])) {
        $item = $project[$id];
    }
}

if (!isset($item)) {
    header("location:portfolio.php");
    exit;
}

$pageTitle = $item["title"];
$pageHeading = $item["title"];
$section = null;

include("inc/header.php"); 
?>

	<div class="content">
		<div class="breadcrumbs">
	        <a href="portfolio.php">Portfolio</a>
	        &gt; <a href="portfolio.php?id=<?php echo strtolower($item["title"]); ?>">
	        <?php echo $item["title"]; ?></a>
	    </div>
	    <h2 class="content-header"><?php echo $pageTitle ?></h2>
	    <div class="project-picture">
	        <div class="project-picture-container">
	            <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" />
	        </div>      
	    </div>
	    <div class="project-description">
		    <p><?php echo $item["description"]; ?></p>
		</div>    
		<div class="break">
          <hr>
        </div>
        <h1 class="content-header">Need help?</h1>
        <div class="hire" class="content-action">
	        <a href="contact.php">Contact Me</a>
	    </div>
	</div>

<?php include("inc/footer.php"); ?>