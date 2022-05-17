<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload hier je foto's</title>
<link rel="stylesheet" href="../../style.css">
</head>
<body>
 <!--Dit is de navbar boven aan het scherm-->
 <div class="topnav">
    <a class="active" href="../../index.html">Home</a>
    <a href="../loginStudent.php">Login</a>
  </div>
  
  <!--Vanaf hier beginnen de foto's-->
	<h2><strong>Foto's van de reizen</strong></h2>
	<div class="container">
	<br>
	<?php
		include('config.php');
		$query=mysqli_query($con,"select * from image_tb");
		if(mysqli_num_rows($query) > 0){
			while($row=mysqli_fetch_array($query)){
				?>
					<img src="<?php echo $row['img_location']; ?>">
				<?php
			}
		}else{
			echo "<p><strong>No Images uploaded yet.</strong></p>";
		}
	?>
	</div>
	<div>
	<form method="POST" action="upload.php" enctype="multipart/form-data">
	<label>Image:</label><input type="file" name="image" accept="image/*">
	<button type="submit">Upload</button>
	</form>
	</div>
</body>
</html>