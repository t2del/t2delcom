<?php
if ( isset ( $_POST [ 'submit' ] ))
{
	$to = 'macapagal.dennis@gmail.com, xynned@gmail.com' ; // REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
	$phone = $_POST['phone'];
	$name = ucfirst($_POST['name']);
	$message_display = $_POST["message"];
	$from = $_POST['email'];
	$subject = "<t2del.com> Inquiry by: ".$name. " <".$from. ">";
	ob_start(); ?>
    <div style="visibility:hidden; height:0px;">
    	<?php include "email.php"; ?>
    </div>
    <?php 
    $message = ob_get_flush();
	//$headers = 'From: ' . $from . PHP_EOL ; // NOT SUGGESTED TO CHANGE THESE VALUES
	$headers = "From: t2deldotcom <dennismacapagal@t2del.com>\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n";
	if(mail ( $to, $subject, $message, $headers )) 
	{
		echo "<script> alert('Thank you! Your e-mail has been sent and should receive a reply within 24 hours!'); </script>" ;
	}
}
?>
<form id="contact" class="boxify" action="<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" method="post">
    <h3>Nice to meet you!</h3>
    <h4>Have a question or just want to get information?</h4>
    <fieldset>
        <input name="name" type="text" id="name" tabindex="1" placeholder="Your name" required />
    </fieldset>
    <fieldset>
        <input name="email" type="email" id="email" tabindex="2" placeholder="Your Email Address" required>
    </fieldset>
    <fieldset>
        <input name="phone" type="tel" id="phone" tabindex="3" placeholder="Your Phone Number " required>
    </fieldset>
    <fieldset>
        <textarea name="message" id="message" tabindex="4" placeholder="Type your message here...." required></textarea>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="5">Submit</button>
    </fieldset>
</form>