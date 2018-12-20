<?php 
	include('connect.php');
	$id = $_GET['id'];
	$sql = "Select id,music,type from music where id='$id'";
	$result = $conn->query($sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<form method="POST" id="form'.$row['id'].'" > ';
		echo '<td><input class="form-control" type="text" name="id" size="3" value="'.$row['id'].'">
			</td>';
		echo '<td><input class="form-control" type="text" name="music" size="3" value="'.$row['music'].'">
		    </td>';
		echo '<td><input class="form-control" type="text" name="type" size="3"   value="'.$row['type'].'">
		     </td>';

		echo '</form>';
		echo '<td>
				<button class="btn btn-success" onclick="Update('.$row['id'].')"><span class="glyphicon glyphicon-ok"></span> Update</button> 
				<button class="btn btn-default" onclick="location.reload();">Cancel</button>
			  </td>';
	}
?>