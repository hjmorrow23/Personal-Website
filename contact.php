<?php 
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" || $email == "" || $details == "") {
        $error_message = "Please fill in the required fields: Name, Email, Details";
    }
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Bad form input";
    }
    
    require("inc/phpmailer/class.phpmailer.php");
    require("inc/phpmailer/class.smtp.php");
    
    $mail = new PHPMailer;
    
    if (!isset($error_message) && !$mail->ValidateAddress($email)) {
        $error_message = "Invalid Email Address";
    }
     
    if (!isset($error_message)) {
        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Details " . $details . "\n";
        

/*
        $mail->SMTPDebug = 3;  
        
        $mail->isSMTP();                                      
		$mail->Host = 'smtp.postmarkapp.com';  
		$mail->SMTPAuth = true;                              
		$mail->Username = 'hjmorrow23';                 
		$mail->Password = 'akamaru66';                          
		$mail->SMTPSecure = 'tls';                             
		$mail->Port = 25; 
                               	  
        
        $mail->setFrom($email, $name);
        $mail->addAddress('hjmorrow23@gmail.com');     		  
        
        $mail->isHTML(false);                                 
        
        $mail->Subject = 'New Project inquiry from ' . $name;
        $mail->Body    = $email_body;
        
        if($mail->send()) {
            header("location:contact.php?status=thanks");
            exit;
        }
        $error_message = 'Message could not be sent.';
        $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
*/
    }
    
}

	
$pageTitle = "Contact";
$pageHeading = "Contact";

	
include("inc/header.php");	
?>		
		<!--Body Column in Grid-->
	
		
		<div class="content">
				<h2 class="content-header">Say hello!</h2>
					<div class="intro-content">
					  <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "<p>Thanks for the email! I&rsquo;ll check out your submission shortly!</p>";
				        } else {
				            if (isset($error_message)) {
				                echo "<p class='message'>".$error_message . "</p>";
				            } else {
				                echo "<p>If you would like to know more about me and how I can work to help meet your professional web goals, feel free to reach me by submitting the form below with your name, email, and a brief description of the project you are interested in. I would be happy to meet with you to discuss ways I can help your business reach its potential.</p>";
			            }
			        ?>
			        </div>	        
				    <div id="contact">
						<form method="post" action="https://formspree.io/hjmorrow23@gmail.com">
				           <label for="name">Name</label>
				           <input type="text" id="name" name="name" value="<?php if (isset($name)) { echo $name; } ?>" />			            
				           <label for="email">Email</label>
				           <input type="text" id="email" name="_replyto" value="<?php if (isset($email)) { echo $email; } ?>" />
					       <label for="name">Project Details</label>
						   <textarea name="details" id="details"><?php if (isset($details)) { echo htmlspecialchars($_POST["details"]); } ?></textarea>
						   <input type="hidden" name="_next" value="contact.php?status=thanks" />
				            <div style="display:none">
				                <label for="address">Address</label>
				                <input type="text" id="address" name="address" />
				                <p>Please leave this field blank</p>
				            </div>
				            <input type="submit" value="Send" />
				        </form>		
			        </div>		
				<?php } ?>
		</div>
			        
<?php include("inc/footer.php"); ?>