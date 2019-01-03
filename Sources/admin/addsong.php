<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
			include("connect.php");
			$name = checkInput($_POST['name']);
			$author = checkInput($_POST['author']);
			$singer = checkInput($_POST['singer']);
			$type = checkInput($_POST['type']);
			$link = checkInput($_POST['link']);
			$check = "SELECT `name` FROM listsong WHERE name = '$name'";
			$result_check = $conn->query($check);
			if (empty($name) || empty($author) || empty($singer) || empty($type) || empty($link)) {
				echo '<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong></strong> Có Vẻ Như Bạn Chưa Nhập Đẩy Đủ Thông Tin.
				</div>';
			}
			else{

				if ($result_check->num_rows > 0) {
				echo '<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong></strong> Bài Hát Này Đã Có Trong Cơ Sở Dữ Liệu.
					</div>';
				} 
				else
				{
				$sql = "insert into `listsong`(`name`,`author`,`singer`,`type`,`link`) value ('$name','$author','$singer','$type','$link')";
				$result = $conn->query($sql);
				echo '<div class="alert alert-success">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Thành Công!</strong> Đã Thêm nhạc Vào Danh Sách.
					</div>';
				} 
				}
			
			
?>