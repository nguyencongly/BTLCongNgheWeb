<?php
			include("connect.php");
			$music = checkInput($_POST['music']);
			$type = checkInput($_POST['type']);
			$check = "SELECT `music` FROM music WHERE music = '$music'";
			$result_check = $conn->query($check);
			if (empty($music) || empty($type)) {
				echo '<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong></strong> Bạn Chưa Nhập Đẩy Đủ Thông Tin.
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
				$sql = "insert into `music`(`music`,`type`) value ('$music','$type')";
				$result = $conn->query($sql);
				echo "<script>";
				echo "location.reload();";
				echo "</script>";
				}
			}
			
?>