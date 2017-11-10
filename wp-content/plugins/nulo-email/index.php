<?php
/*
Plugin Name: Nulo Email Plugin
Plugin URI: https://nulo.com/wp-content/plugins/nulo-email
Description: Custom Email Plugin for Nulo Pet Food by Sara from Left Turn Only http://leftturnonly.tv
Version: 1.0
Author: Sara Pearce
Author URI: http://sarapearce.net
*/

add_filter ("wp_mail_content_type", "test_mail_content_type");
function test_mail_content_type() {
	return "text/html";
}
	
add_filter ("wp_mail_from", "test_mail_from");
function test_mail_from() {
	return "sara@mail.sarapearce.net";
}
	
add_filter ("wp_mail_from_name", "test_mail_from_name");
function test_email_from_name() {
	return "NuloPetFood";
}

function wp_new_user_notification($user_id, $plaintext_pass) {
	$user = new WP_User($user_id);

	$user_login = stripslashes($user->user_login);
	$user_email = stripslashes($user->user_email);
	
	$email_subject = "Welcome to MyAwesomeSite ".$user_login."!";
	
	ob_start();
	
	<?php echo 

	include("email_header.php");
	
	?>
	
	<p>A very special welcome to you, <?php echo $user_login ?>. Thank you for joining Nulo.com!</p>
	
	<p>
		Your password is <strong style="color:orange"><?php echo $plaintext_pass ?></strong> <br>
		Please keep it secret and keep it safe!
	</p>
	
	<p>
		We hope you enjoy your stay at Nulo.com. If you have any problems, questions, opinions, praise, 
		comments, suggestions, please feel free to contact us at any time.
	</p>
	
	
	<?php
	include("email_footer.php");
	
	$message = ob_get_contents();
	ob_end_clean();

	wp_mail($user_email, $email_subject, $message);



?>


