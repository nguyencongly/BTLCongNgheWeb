<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Quản lý thành viên</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
 
  <body>
    <div class="container">
      <div class="row">
        <h3> Quản lý thành viên</h3>
        <table class="table">
          <caption>Danh sách thành viên đã đăng ký</caption>
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên đăng nhập</th>
              <th>Họ tên</th>
              <th>Địa chỉ email</th>
              <th>Cấp độ</th>
              <th>Hành động</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>teo123</td>
              <td>Huynh Van Teo</td>
              <td>huynhvanteo@gmail.com</td>
              <td>Thành viên</td>
              <td><a href="chinh-sua-thanh-vien.php?id=1">Sửa</a> <a href="xoa-thanh-vien.php?id=1">Xóa</a></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>tuan123</td>
              <td>Huynh Van Tuan</td>
              <td>huynhvantuan@gmail.com</td>
              <td>Quản trị viên</td>
              <td><a href="chinh-sua-thanh-vien.php?id=2">Sửa</a> <a href="xoa-thanh-vien.php?id=2">Xóa</a></td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>ti123</td>
              <td>Huynh Van Ti</td>
              <td>huynhvanti@gmail.com</td>
              <td>Thành viên</td>
              <td><a href="chinh-sua-thanh-vien.php?id=3">Sửa</a> <a href="xoa-thanh-vien.php?id=3">Xóa</a></td>
            </tr>
          </tbody>
        </table>
      </div>
 
    </div><!-- /.container -->
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  
 
</body></html>