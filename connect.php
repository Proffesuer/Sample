<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect to php</title>
</head>
<body>
    

<?php
session_start();
//connect to the server.
$connect =mysql_connect("localhost","root","") or die ("Error:Couldn't Connect to the server");
mysql_select_db("contact_prudence",$connect);
?>
</body>
</html>