
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
$query="insert into name values('$name',100)";
$result=$conn->query($query);
}
?>
