<?php
mysql_connect("localhost","root","");
mysql_select_db("uploaded"); 
?>
<html>
<head>
<title></title>
</head>
<body>
<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysql_query("SELECT * FROM `videos` WHERE id='$id'");
	while($row=mysql_fetch_assoc($query))
	{
		$name = $row['name'];
		$url = $row['url'];
	}
	
	echo "You are watching".$name."<br />";
	echo "<embed src='$url' width='560' height='315'></embed>";
	
}
	else
	{
		echo "Error!";
	}
	?>
	</body>
</html>
</body>
</html>