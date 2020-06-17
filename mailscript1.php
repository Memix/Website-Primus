<html lang = "sl">
<head>
<meta charset="utf-8">
<title>mailto</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	color: #03C;
	font-size: 30px;
}
h1 {
	font-size: 14px;
	color: #03C;
}
#sent {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 30px;
	padding: 10px;
	border-top-style: double;
	border-right-style: double;
	border-bottom-style: double;
	border-left-style: double;
	border-top-color: #6CF;
	border-right-color: #6CF;
	border-bottom-color: #6CF;
	border-left-color: #6CF;
	height: 300px;
	width: 400px;
}
</style>
</head>
<body>
<div id="sent">
<?php
date_default_timezone_set( 'UTC' );

$from="hisaprimus@gmail.com";
$to="kuk.primoz@gmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['Message'];


mail ($to, $subject, $message, "From:". $email );

echo "Your message has been sent";


?>
</div>
</body>
</html>