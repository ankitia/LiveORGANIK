
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "anita.malik@liveorganik.com";
$subject = "GET IN TOUCH";

$message = "
<html>
<head>
<title>HTML email</title>
<style>
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
th, td {
   padding: 15px;
}
.back_header{
background: #B2D430;
}
</style>
</head>
<body>

<table border='1' width='500' >
<tr>
 <th class='back_header' colspan='2'>GET IN TOUCH</th>
</tr>
<tr>
 <td width='20%'><strong>Firstname</strong></td>
 <td>".$fname."</td>
</tr>
<tr>
 <td><strong>Lastname</strong></td>
 <td>".$lname."</td>
</tr>
<tr>
 <td><strong>Email</strong></td>
 <td>".$email."</td>
</tr>
<tr>
 <td><strong>Message</strong></td>
 <td>".$message."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <anita.malik@liveorganik.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script type='text/javascript'>window.location.href = 'http://www.liveorganik.com';</script>";



?>
