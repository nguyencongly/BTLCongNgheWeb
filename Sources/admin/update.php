<?php 
			include("connect.php");
			$id = $_GET['id'];
			$music = $_POST['music'];
			$type = $_POST['type'];
			$check = "SELECT `music` FROM music WHERE music = '$music'";
			$result_check = $conn->query($check);
			if (empty($music) || empty($type)) {
				echo '<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong></strong> Dữ Liệu Trống Vui Lòng Điền Vào Input.
				</div>';
			}
			else{

				if ($result_check->num_rows > 0) {
				echo '<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong></strong> Loại Nhạc Này Đã Có Trong Cơ Sở Dữ Liệu.
					</div>';
				} 
				else
				{
				$sql = "UPDATE `music` SET `id`='$id',`music`='$music',`type`='$type' WHERE id='$id'";
				$result = $conn->query($sql);
				echo "<script>";
				echo "location.reload();";
				echo "</script>";
				}
			}
			
?>