<?php
require_once("../connect.php");
 
if (isset($_GET["id"])) {
	//Lây id được gửi qua từ bên quan-ly-thanh-vien.php
	$id = $_GET["id"];
	//Thực thi câu lệnh sql delete để xóa user
	$sql = "delete from user where id = $id";
	$query = mysqli_query($conn, $sql);
	//Chuyển hướng trang web về lại trang quan-ly-thanh-vien.php
	header('Location:admin\quan-ly-thanh-vien.php');
}
 
 
?>