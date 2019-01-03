<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cungnghenhac.com</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">

		<script type="text/javascript" src="music.js"></script>
		<script type="text/javascript">
			function addsong(){
			$('#result').html('<img  src="loading.gif"/>');
	        setTimeout(function(){
	          $('#result').load('addsong.php',$('#form_addsong').serializeArray())
	        }, 1000);
			}
			function play(){
				$('#result').html('<img src="loading.gif"/>');
		        setTimeout(function(){
		          $('#result').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Đang Phát !</strong> Phía Sau Một Cô Gái - SooBin Hoàng Sơn.</div>')
		        }, 1000);
			}
		</script>
</head>
<body >
	<div class="container-fluid" >
		<div style="background-color: white">
			<center><img src="logo.jpg" width="200"></center></center>
			<form id="form_search" class="form-inline" method="POST" action="search.php" style="padding-left: 10px;padding-bottom: 10px;">
					<input class="form-control" type="text" name="search" placeholder="Nhập Tên Bài Hát Để Tìm Kiếm.." size="30">
					<button onclick="search();" class="btn btn-default" ><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
			
			<div>
					<table class="table table-hover">
					    <thead>
					      <tr>
					        <th>ID</th>
					        <th>Tên Bài Hát</th>
					        <th>Người Sáng Tác</th>
					        <th>Người Thể Hiện</th>
					        <th>Nghe Thử</th>
					        <th>Tác Vụ</th>
					      </tr>
					    </thead>
					    <tbody>
					    <?php
						include("connect.php");
								$search = $_POST['search'];
								$sql = "select * from listsong where name like '%$search%'";
								if (empty($search)) {
									echo '<script>';
									echo 'alert("Hình Như Bạn Chưa Nhập Tên Để Tìm !");';
									echo '</script>';
								}
								else
								{
									$result = $conn->query($sql);
									while ($row = mysqli_fetch_assoc($result)) {
										echo "<tr>";
												echo '<td>'.$row['id'].'</td>';
												echo '<td>'.$row['name'].'</td>';
												echo '<td>'.$row['author'].'</td>';
												echo '<td>'.$row['singer'].'</td>';
												echo '<td><audio src="music/PhiaSauMotCoGai.mp3" controls /></td>';
												echo '<td><a href="'.$row['link'].'" target="blank" title="Nghe!"><span class="glyphicon glyphicon-music"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
													<a href="deletesong.php?name='.$row['name'].'"><span style="color:red" class="glyphicon glyphicon-remove-sign"></span></a></td>';
												echo "</tr>";
											
											
									}
								}

								
						?>
					</table>
					<center><div id="result"></div></center>
				</div>
				
	</div>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>