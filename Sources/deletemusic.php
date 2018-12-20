<?php
			include("connect.php");
			$music = $_GET['music'];
			$sql = "delete from music where music='$music'";
			$result = $conn->query($sql);
			echo "<script>";
			echo "window.location='index.php';";
			echo "</script>";
?>