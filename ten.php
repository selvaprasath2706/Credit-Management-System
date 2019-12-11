<?php
$hn='localhost';
$db='credits';
$un='root';
$pw='';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)
{
    echo"connect error";
}
$name='vasanth';
$query="SELECT name,credits FROM name where name='$name' ";
$result=$conn->query($query);
$rows=$result->num_rows;
echo"<table   align=center> <tr> <th>name</th> <th>credits</th>  </tr>";
for($j=0;$j<$rows;++$j)
{
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    echo"<tr>";
    for($k=0;$k<2;++$k)
    {
    echo"<td>$row[$k]</td>";
    $deposit=$row[$k];
    }
    }

echo"</table>";
?>
<form method="POST"/>
choose the person<select name="name">
    <option>
        antony
    </option>
    <option>
        john
    </option>
    <option>
        kesav
    </option>
    <option>
        nowshik
    </option>
    <option>
        josan
    </option>
    <option>
        aldino
    </option>
    <option>
        arul
    </option>
    <option>
        alan
    </option>
    <option>
        pragnesh
    </option>
    <option>
        vasanth
    </option>
</select>
enter the credits u want to transfer<input type="text" name="credit"/>
<input type="submit" name="submit" value="submit"/>
<?php
if(isset($_POST['submit']))
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
$name='vasanth';
$name1=$_POST['name'];
$credit=$_POST['credit'];
$newcredit=$deposit-$credit;
if($newcredit>0)
{

$query="update name set credits='$newcredit' where name='$name'";
$result=$conn->query($query);

$query="SELECT name,credits FROM name where name='$name1'";
$result=$conn->query($query);
$rows=$result->num_rows;
for($j=0;$j<$rows;++$j)
{
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    echo"<tr>";
    for($k=0;$k<2;++$k)
    {    
     $deposit1=$row[$k];
    }
}
$newcredits=$deposit1+$credit;
$query="update name set credits='$newcredits' where name='$name1'";
$result=$conn->query($query);
}
//
    else {
   echo"unable to transact";     
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



