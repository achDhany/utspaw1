<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO tbl_151(nama_xyz,email_xyz) VALUES('$nama','$email')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
}
?>
</body>
</html>
