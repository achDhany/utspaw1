<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM tbl_151 ORDER BY id_xyz DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>id</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Aksi</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id_xyz']."</td>";
		echo "<td>".$res['nama_xyz']."</td>";
		echo "<td>".$res['email_xyz']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id_xyz]\">Edit</a> | <a href=\"delete.php?id=$res[id_xyz]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
