<?php
			session_start();
			$tyle_delete = $_SESSION['type'];
			include("connect.php");
			$name = $_GET['name'];
			$sql = "delete from listsong where name='$name'";
			$result = $conn->query($sql);
			echo "<script>";
			echo "window.location='song.php?type=".$tyle_delete."';";
			echo "</script>";
?>