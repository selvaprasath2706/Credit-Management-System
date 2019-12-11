
enter the name
<form method="POST" />
<input type="text" name="name"/>
<input type="submit" name="submit" value="submit"/>
<?php
if(isset($_POST['submit']))
{
$hn='localhost';
$db='credits';
$un='root';
$pw='';
$name=$_POST['name'];
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)  die($conn->connect_error);
$query="delete from name where name='$name'";
$result=$conn->query($query);
}

