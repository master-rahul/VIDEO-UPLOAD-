<?php

mysql_connect("localhost","root","");
 mysql_select_db("uploaded");
	?>
	<html>
	<head>
	</head>
	<body>
	<?php
	$query=mysql_query("SELECT * FROM `videos`");
	while($row = mysql_fetch_assoc($query))
	{
		$id=$row['id'];
        $name=$row['name'];
		echo "<a href='watch.php?id=$id'>$name</a><br />";
		}
	?>
	</body>
	</html>