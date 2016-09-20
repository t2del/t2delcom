<?php
if ( isset ( $_POST [ 'submit' ] ))
{
	$to = 'macapagal.dennis@gmail.com, xynned@gmail.com' ; // REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
	$phone = $_POST['phone'];
	$name = ucfirst($_POST['name']);
	$subject = "Inquiry by: ".$name. " Phone: ".$phone;
	$from = $_POST['email'];
	$message = $_POST [ "message" ] ;
	$headers = 'From: ' . $from . PHP_EOL ; // NOT SUGGESTED TO CHANGE THESE VALUES
	if(mail ( $to, $subject, $message, $headers )) 
	{
		echo "Thank you! Your e-mail has been sent and should receive a reply within 24 hours!" ;
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