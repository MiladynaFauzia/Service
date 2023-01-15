<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
		<meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABADI SERVICE KOMPUTER</title>
</head>
<body>
<?php include "header1.php";	?>

								<h2>Change Photo</h2>
										<?php
											// call connection php mysql
												include "connection.php";

												// make query SELECT FROM WHERE
												$query="SELECT * FROM komputer WHERE pc_id ='$_GET[id]'";

												// run query
												$pc=mysqli_query($db_connection,$query);

												// extract data from query result
												$data=mysqli_fetch_assoc($pc);
										 ?>
									</div>
	 <form method="post" action="komputer_upload.php" enctype="multipart/form-data">
	 	<table>
	 		<tr>
	 			<td></td>
	 			<td><img src="uploads/komputer/<?=$data['pc_photo']?>" width="100" height="100"></td>
	 		</tr>
	 		<tr>
	 		<td>New Photo</td>
	 		<td>: <input type="file" name="new_photo" required></td>
	 		</tr>
	 		<tr>
	 			<td>&nbsp;</td>
	 			<td>&nbsp;
	 				<input type="submit" name="upload" value="UPLOAD" />
	 				<input type="hidden" name="pc_photo" value="<?=$data['pc_photo']?>" />
	 				<input type="hidden" name="pc_id" value="<?=$data['pc_id']?>" />
	 			</td>
	 		</tr>
	 	</table>
	 </form>
	 <p><a href="read_komputer.php" class="btn">CANCEL</a></p>
</body>
</html>