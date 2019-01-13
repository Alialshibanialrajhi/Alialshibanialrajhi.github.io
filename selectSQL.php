<html><head><titel></titel></head>
<body>
<?php
$con= mysqli_connect("localhost","root","","tests");
if(mysqli_connect_errno())
    {
	echo "failed".mysqli_connect_error();
	}

$sql = "SELECT DISTINCT
                    fname, lname
                FROM
                    aa"
                ; 
$result = mysqli_query($con,$sql); 
while($row= mysqli_fetch_array($result)) 
{
echo $row['fname']."  ".$row['lname'];
echo "</br>";

}
?>
</body>
</html>