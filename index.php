<?php
mysql_connect("localhost","root","");
 mysql_select_db("uploaded");
	
	if(isset($_POST['submit']))
	{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	move_uploaded_file($temp,"uploaded/".$name);
		
		$url="http://localhost/projects/Video%20upload%20and%20playback/uploaded/$name";
	mysql_query("INSERT INTO `videos` VALUE('','$name','$url')");
	}
?>

<html>
<head>
<title></title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" name="submit" value="Upload!"/>

</form>
<?php
if(isset($_POST['submit'])){
	echo "<br />".$name." file has been uploaded";
}
?>

</body>
</html>
</body>
</html>
	
