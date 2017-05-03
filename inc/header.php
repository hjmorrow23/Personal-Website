<!doctype html>
<head>
    <title><?php echo $pageTitle; ?> | Henry Morrow</title>
    <meta charset="UTF-8">

    <!-- Information that will display with description> -->

    <meta name="description" content="Welcome to my page! I'm a web developer currently living near Grand Rapids, MI, and I would love to help you with your next project! Here you will find my resume and some other general information on me." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--  Favicon Links    -->

	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <!-- External Normalize, CSS, and Javascript-->
    
    <link href="http://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Alegreya:700" rel="stylesheet" type="text/css" />
	<style>
		/* Main Layout Styles
		================================ */
		
		.main-header {
			padding-top: 0.625rem;
			padding-bottom: 0.625rem;
		    height: 50vh;
			background:linear-gradient(
		      rgba(192, 192, 192, 0.6), 
		      rgba(192, 192, 192, 0.6)
		    ),  url('IMG/tie-small.jpg'); 
		    background-size: cover;
		    background-position: center;
		    background-attachment: s;
		    font-family: 'Alegreya', serif;
		    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.43);
			-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.43);
			box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.43);
		}
		
		.main-logo {
			margin-top: 0;
			margin-bottom: 0;
			font-size: 1.5em;
			text-align: left;
			display: inline-block;
		}
		
		.main-logo img,
		.footer-logo img {
			width: 50px;
		    height: 50px;
		}
		
		.main-logo a,
		.heading-item a {
			display: inline-block;
			text-align: center;
			color: white;
			padding: 0.25rem 0.25rem;
		    text-decoration: none;
		}
		
		.main-logo a,
		.main-nav a,
		.heading-item a,
		.footer-nav a {
			transition: 0.5s;
		}
		
		.main-logo a:hover,
		.main-nav a:hover,
		.footer-nav a:hover {
			color: grey;
		}
		
		#selected,
		#select {
			color: grey;
		}
		
		.heading-item a:hover {
			background-color: white;
			color: grey;
		}
		
		.heading-item,
		#more-projects {
			text-align: center;
		}
		
		.heading-item a {
			border: 3px solid white;
			width: 8rem;
			padding: 5px;
			font-family: 'Roboto', sans-serif;
		}
		
		
		.main-nav {
			display: none;
			list-style: none;
		}
		
		.page-container {
			top: 0;
			background-color:#fff;
			position: absolute;
		    width: 100%;
		    z-index: 100;
		    transition: transform .5s;  
		}
		
		.menu-icon {
			font-size: 30px;
			text-decoration: none;
			color: white;
			position: absolute;
			z-index: 0;
			top: 0;
			right: 0;
			margin-top: 1rem;
			margin-right: 1rem;
			transition: color .5s;
		}
		
		.active {
			transform: translateX(-80%);
		}
		
		.hide-mobile {
			overflow-x: hidden;
		}
		
		.cross {
			font-size: 90px;
		}
		
		.mobile-nav {
			position: absolute;
			z-index: 0;
			top: 0;
			right: 0;
			width: 80%; 
			text-align: center;
			background-color: #212121;
			transform: translate(100%);
			font-family: 'Droid Sans', sans-serif;
		}
		
		.mobile-nav a:hover {
			background-color: white;
			color: black;
		}
		
		.mobile-nav a {
			text-decoration: none;
			color: white;
			width: 100%;	
			display: block;
			padding-top: 2rem;
			padding-bottom: 2rem;
			transition: color .7s, background-color .7s;
		}
		
		.main-heading {
		  color: white;
		  text-align: center;
		  font-size: 3rem;
		  font-weight: 600;
		  padding-top: 5%;
		  padding-bottom: 1.5rem;
		}
		
		@media (min-width: 768px) { 
			.main-header {
				width: 100%;
				height: 100vh;
				background-attachment: fixed;
			}
			
			.main-logo,
			.main-nav li {
				float: left;
			}
			
			.main-heading {
				margin-top: 12rem;	
				font-size: 5rem;
			}
			
			.main-nav {
				text-align: right;
				display: inline-block;
				padding-left: 50px;
				float: right;
			}
			
			.menu-icon,
			.mobile-nav {
				display: none;
			}
			
			.main-nav a {
				display: inline-block;
				text-align: center;
				color: white;
				padding: 0.625rem;
		    	text-decoration: none;
			}
			
			
			.main-nav li {
				margin-top: 0.375rem;
				margin-left: 0.625rem;
				text-align: center;
			}
			
			.selected {
				color: grey;
			}
		}
		
		@media (min-width: 1px) and (max-width: 767px)  { 
			.main-nav li {
				margin-top: 0.75rem;
			}
		}
	</style>

</head>
<body>

	<div class="page-container hide-mobile">
		<!--Header and Nav-->

		<header class="main-header">

			<!-- Background-->
			<div class="background">

				<!--Web Logo and Nav-->
				<h1 class="main-logo"><a href="index.php"><img src="IMG/Henrylogo.svg" alt="logo"></a></h1>
				<ul class="main-nav">
					<li><a href="index.php" <?php if($pageTitle == "Home") {echo 'id="selected"';} ?>>Home</a></li>
					<li><a href="bio.php" <?php if($pageTitle == "Bio") {echo 'id="selected"';} ?>>Bio</a></li>
					<li><a href="portfolio.php" <?php if($pageTitle == "Portfolio") {echo 'id="selected"';} ?>>Portfolio</a></li>
					<li><a href="resume.php" <?php if($pageTitle == "Résumé") {echo 'id="selected"';} ?>>Résumé</a></li>
					<li><a href="http://blog.henrymorrow.com/wp" <?php if($pageTitle == "Blog") {echo 'id="selected"';} ?>>Blog</a></li>
	                <li><a href="contact.php" <?php if($pageTitle == "Contact") {echo 'id="selected"';} ?>>Contact</a></li>
	                

				</ul>
				<a href="#" class="menu-icon">&#9776;</a>
			</div>

			<!--Page Title-->
	          <div class="main-heading">
	            <?php echo $pageHeading; ?>
	          </div>

	        <?php
if(isset($pageHeadingLink)) {
	echo
	'<!--Title Link-->
	          <div class="heading-item">
	            <a href="' . $pageHeadingLinkUrl . '">' . $pageHeadingLink . '</a>
	          </div>';
}
?>
		</header>
