<?php 
	session_start();
	include("ketnoi.php");
	$username =$_POST['username'];
	$password = ($_POST["password"]);
	$sql=mysql_query("select * from user where username='$username' and password='$password'");
	$row=mysql_num_rows($sql);
	alert($row);
	if($row>0)
	{
	
		$arr=mysql_fetch_array($sql);
		$_SESSION['u_id']= $arr['id'];
		$_SESSION['user_id'] = $arr['username'];
		$_SESSION['pass']= $arr['password'];
		$_SESSION['hoten']= $arr['hoten'];
		$_SESSION['ngaysinh']= $arr['ngaysinh'];
		$_SESSION['diachi']= $arr['diachi'];
		header("location:index.php");
	}
	$sql=mysqli_query("select*from admin where username='$username' and password='$password'");
	$row=mysql_num_rows($sql);
	if($row>0)
	{
		
		$arr=mysql_fetch_array($sql);
		$_SESSION['u_id']= $arr['id'];
		$_SESSION['user_id'] = $arr['username'];
		$_SESSION['pass']= $arr['password'];
		$_SESSION['hoten']= $arr['hoten'];
		$_SESSION['ngaysinh']= $arr['ngaysinh'];
		$_SESSION['diachi']= $arr['diachi'];
		header("location:dashboard.php");
	}
	else
	echo '<script type="text/javascript"> alert("Ten dang nhap hoac mat khau sai"); history.go(-1)</script>';
	
?>