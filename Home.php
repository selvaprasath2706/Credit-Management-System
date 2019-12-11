<?php
{
$hn='localhost';
$db='credits';
$un='root';
$pw='';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)
{
    echo"connect error";
}

$query="SELECT * FROM name ";
$result=$conn->query($query);
if(!$result) die ("database access failed".$conn->error);
$rows=$result->num_rows;
echo"<table border=2 celpadding=2 align=center> <tr> <th>name</th> <th>credits</th>  </tr>";
for($j=0;$j<$rows;++$j)
{
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    echo"<tr>";
    if($j==0)
            echo'<td><a href="one.php"/>antony</a><td>';
    if($j==1)
           echo'<td><a href="two.php"/>john</a><td>';
    if($j==2)
           echo'<td><a href="three.php"/>keshav</a><td>';
    if($j==3)
            echo'<td><a href="four.php"/>nowshik</a><td>';
    if($j==4)
            echo'<td><a href="five.php"/>josan</a><td>';
    if($j==5)
            echo'<td><a href="six.php"/>aldino</a><td>';
    if($j==6)
            echo'<td><a href="seven.php"/>arul</a><td>';
    if($j==7)
            echo'<td><a href="eight.php"/>alan</a><td>';
    if($j==8)
        echo'<td><a href="nine.php"/>praganesh</a><td>';
    if($j==9)
        echo'<td><a href="ten.php"/>vasanth</a><td>';
    for($k=1;$k<2;++$k)
    echo"$row[$k]";
    echo"</tr>";
}
echo"</table>";
}
?>

