<?php 

	include('config.php');

	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM Reis WHERE id = $id";

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$Data = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);

	}

?>

<!DOCTYPE html>
<html>

	<div class="container center">
		<?php if($Data): ?>
			<h4><?php echo $Data['Omschrijving']; ?></h4>
			<p>Created by <?php echo $Data['Begindatum']; ?></p>
			<p><?php echo date($Data['Einddatum']); ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo $Data['Maxinschrijvingen']; ?></p>
		<?php else: ?>
			<h5>Deze reis bestaat niet</h5>
		<?php endif ?>
	</div>


</html>