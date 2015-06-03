<?
$emailSubject = $_POST['Subject'];
$emailMessage = $_POST['Message'];
$emailFrom = $_POST['Email'];
$emailFromName = $_POST['Name'];

if (!empty($emailFrom)) {
$emailHeaders = 'From: "' . $emailName . '" <' . $emailFrom . '>';
}

else {
    $emailHeaders = 'From: "Website" <howderek.com>';
}

if (!empty($emailFrom)) {
$emailHeaders = 'From: "' . $emailName . '" <contactform>';
} 

else {
    $emailHeaders = 'From: "Derek Howard" <webmaster@example.com>';
}

mail("doombreakr@gmail.com",  $emailSubject, ('From: '.$emailFrom."\xA".'IP:'.$_SERVER["REMOTE_ADDR"]."\xA".'Message: '.$emailMessage), $emailHeaders);
?>
<script>
document.location = "http://cyclefitness.howderek.com/contact.php";
</script>