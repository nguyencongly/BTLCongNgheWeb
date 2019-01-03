<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MFE.com</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<style type="text/css">
		#outerCircleText {
		font-style: italic;

		font-weight: bold;

		font-family: 'comic sans ms', verdana, arial;

		color: #23a203;

		position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}

		#outerCircleText div {position: relative;}

		#outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
		 End Circle Text Styles */

		</style>
		<script type="text/javascript">
			function addsong(){
			$('#result').html('<img src="loading.gif"/>');
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
			<center><a href="#" target="blank"><img src="logo.jpg" width="200"></a></center>
			<form id="form_search" class="form-inline" method="POST" action="search.php" style="padding-left: 10px;padding-bottom: 10px;">
					<input class="form-control" type="text" name="search" placeholder="Nhập Tên Bài Hát " size="30">
					<button onclick="search();" class="btn btn-default" ><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
		

					<table class="table table-hover">
					    <thead>
					      <tr>
					        <th>ID</th>
					        <th>Tên Bài Hát</th>
					        <th>Người Sáng Tác</th>
					        <th>Người Thể Hiện</th>
					        <th>Nghe</th>
					        <th>Thao Tác</th>
					      </tr>
					    </thead>
					    <tbody>
					    <?php
					    session_start();
						include("connect.php");
						$type = $_GET['type'];
						$_SESSION['type'] = $type;
						$sql = "Select id,name,author,singer,link From listsong where type='$type'";
						$result = $conn->query($sql);
						if ($result->num_rows == 0) {
							echo '<br><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong></strong> Mục Này Chưa Có Bài Hát Nào.</div>';
						}
						else
						while($row = mysqli_fetch_assoc($result)){
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
						?>
					</table>	
					<center><div id="result"></div></center>
			</div>
		
	</div>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>