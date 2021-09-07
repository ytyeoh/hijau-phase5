<?PHP
$top = "<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd"><html>";
$bottom = "<body></body></html>";
$blank = ' ';
$sep = "\r\n";
$subject = $_POST['d'];
$name = $_POST['a'];
$email = $_POST['b'];
$phone = $_POST['c'];

$contact = $_POST['email'] .$blank .$_POST['phone'];
$body = $name .$sep .$email .$sep .$phone .$sep .$subject .$sep;
if(!$_POST['a1'] && !$_POST['a2']){
    mail('ytyeoh@kikia.co',$subject, $body);
    echo ("Thank you for contacting us, " .$name."<br> Your message: <b>");
    echo $subject;
    echo "</b>, has been recieved</br> A response will be sent to you in a timely fashion. <br><br> Have a wonderful day!";
 
}

?>