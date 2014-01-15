<?php
 
// Define some constants
define( "RECIPIENT_NAME", "GC2 Website" );
define( "RECIPIENT_EMAIL", "info@gc2services.com" );
define( "EMAIL_SUBJECT", "GC2 services query" );
 
// Read the form values
$success = false;
$senderFName = isset( $_POST['fName'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['fName'] ) : "";
$senderSName = isset( $_POST['sName'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['sName'] ) : "";
$senderName = $senderFName.' '.$senderSName;
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$message = 'Name: '.$senderName."\n";
$message .= 'Email: '.$senderEmail."\n";
$message .= 'Telephone: ';
$message .= isset( $_POST['tel'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['tel'] ) : "";
$message .= "\nMessage:\n";
$message .= isset( $_POST['query'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['query'] ) : "";
 
// If all values exist, send the email
if ( $senderName && $senderEmail && $message ) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $success = mail( $recipient, EMAIL_SUBJECT, $message, $headers );
}
 
// Return an appropriate response to the browser
if ( isset($_GET["ajax"]) ) {
  echo $success ? "success" : "error";
} else {
?>
<html>
  <head>
    <title>Thanks!</title>
  </head>
  <body>
  <?php if ( $success ) echo "<p>Thanks for sending your message! We'll get back to you shortly.</p>" ?>
  <?php if ( !$success ) echo "<p>There was a problem sending your message. Please try again.</p>" ?>
  <p>Click your browser's Back button to return to the page.</p>
  </body>
</html>
<?php
}
?>

