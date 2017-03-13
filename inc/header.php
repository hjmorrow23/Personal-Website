<head>
    <title><?php echo $pageTitle; ?> | Henry Morrow</title>
    <meta charset="UTF-8">

    <!-- Information that will display with description> -->

    <meta name="description" content="Welcome to my page! I'm an outside sales professional and web developer currently living near Grand Rapids, MI, and I would love to help you with your next project! Here you will find my resume and some other general information on me. Thank you for visiting!" />
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
  <link rel="stylesheet" type="text/css" href="CSS/style.min.css">

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
					<li><a href="resume.php" <?php if($pageTitle == "Resume") {echo 'id="selected"';} ?>>Résumé</a></li>
					<li><a href="blog.php" <?php if($pageTitle == "Blog") {echo 'id="selected"';} ?>>Blog</a></li>
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
