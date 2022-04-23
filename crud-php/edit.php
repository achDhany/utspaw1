<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	$result = mysqli_query($mysqli, "UPDATE tbl_151 SET nama_xyz='$nama',email_xyz='$email''$ket' WHERE id_xyz=$id");
	

	header("Location: index.php");

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_151 WHERE id_xyz=$id");

while($res = mysqli_fetch_array($result))
{
	$nama = $res['nama_xyz'];
	$email = $res['email_xyz'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
