<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('connect.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    // $query = mysqli_query($conn,"SELECT username,password FROM user WHERE username='$username'");
    // // if (mysql_num_rows($query) == 0) {
    // //     echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    // //     exit;
    // // }
     
    // //Lấy mật khẩu trong database ra
    // $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    // if ($password != $row['password']) {
    //     echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }
     
    //Lưu tên đăng nhập
   
    $sql=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
	$row=mysqli_num_rows($sql);
	
	if($row>0)
	{
	
		$arr=mysqli_fetch_array($sql);
		$_SESSION['u_id']= $arr['id'];
		$_SESSION['user_id'] = $arr['username'];
		$_SESSION['pass']= $arr['password'];
		$_SESSION['hoten']= $arr['hoten'];
		$_SESSION['ngaysinh']= $arr['ngaysinh'];
		$_SESSION['diachi']= $arr['diachi'];
		header("location:dashboard user .php");
	}
	$sql=mysqli_query($conn,"select*from admin where username='$username' and password='$password'");
	$row=mysqli_num_rows($sql);
	if($row>0)
	{
		
		$arr=mysqli_fetch_array($sql);
		// $_SESSION['u_id']= $arr['id'];
		// $_SESSION['user_id'] = $arr['username'];
		// $_SESSION['pass']= $arr['password'];
		// $_SESSION['hoten']= $arr['hoten'];
		// $_SESSION['ngaysinh']= $arr['ngaysinh'];
		// $_SESSION['diachi']= $arr['diachi'];
		header("location:admin/dbadmin.php");
    }
    else
    echo '<script type="text/javascript"> alert("Ten dang nhap hoac mat khau sai"); history.go(-1)</script>';
}
    // echo '<script type="text/javascript"> alert("Ten dang nhap hoac mat khau sai"); history.go(-1)</script>';
    
    // $_SESSION['username'] = $username;
    // echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='dashboard.php'>Về trang chủ</a>";
    // die();

	

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form action='dangnhap.php?do=login' method='POST'>
            <table cellpadding='10' cellspacing='10' border='10'>
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name='txtUsername' size="30" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name='txtPassword' size="30" />
                    </td>
                </tr>
            </table>
            <br><input type='submit'  name="dangnhap" value='Đăng nhập' />
            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
        </form>
    </body>
</html>