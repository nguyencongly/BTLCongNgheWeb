<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>MFE.com</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script type="text/javascript" src="js/snowstorm.js"></script>
	<script type="text/javascript">
snowStorm.snowColor = 'white'; // màu của tuyết - ở đây là màu xanh xám #fff
snowStorm.flakesMaxActive = 10;  // số lượng tuyết rơi cùng 1 lúc
snowStorm.useTwinkleEffect = true; // cho tuyết nhấp nháy
</script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		function addmusic(){
			$('#result').html('<img src="loading.gif"/>');
	        setTimeout(function(){
	          $('#result').load('addmusic.php',$('#form_addmusic').serializeArray())
	        }, 1000);
		}
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
		function edit(id){
			$('#'+id).load('edit.php?id='+id,null);
	        
		}

		function Update(id){
			$('#result').html('<img src="loading.gif"/>');
	        setTimeout(function(){
	          $('#result').load('update.php?id='+id,$('#form'+id).serializeArray())
	        }, 1000);
		}
	</script>
</head>
<body style="background-color: #f8f8f8">
	<div class="container-fluid" >
		<div style="background-color:white">
			<center><a href="#" target="blank"><img src="logo.jpg" width="200"></a></center>
			<form id="form_search" class="form-inline" method="POST" action="search.php" style="padding-left: 10px;padding-bottom: 10px;">
					<input class="form-control" type="text" name="search" placeholder="Tìm Kiếm Bài Hát.." size="30">
					<button onclick="search();" class="btn btn-default" ><span class="glyphicon glyphicon-search"></span></button>
			</form>

		</div>
		<div class="row">
			<div class="col-md-9">
				<div id="main">
					<table class="table table-hover">
					    <thead>
					      <tr>
					        <th>ID</th>
					        <th>Loại Nhạc</th>
					        <th>Mã Nhạc</th>
					        <th>Thao Tác</th>
					      </tr>
					    </thead>
					    <tbody>
					    <?php
							include("connect.php");
							$sql = "Select id,music,type From music";
							$result = $conn->query($sql);
							while($row = mysqli_fetch_assoc($result)){
							echo "<tr id=".$row['id'].">";
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['music'].'</td>';
							echo '<td>'.$row['type'].'</td>';
							echo '<td><a  href="song.php?type='.$row['type'].'" title="Xem Các Bài Hát!"><span class="glyphicon glyphicon-plus"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
								<a href="deletemusic.php?music='.$row['music'].'" title="Xóa Bài Hát Này!"><span style="color:red" class="glyphicon glyphicon-remove"></span></a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a onclick="edit('.$row['id'].');" title="Sửa Bài Hát Này!"><span s class="glyphicon glyphicon-pencil"></span></a>
								</td>';
							echo "</tr>";
						}
						?>
						<tr>
							<form class="form-group" id="form_addmusic" method="POST" >
							<td><span class="glyphicon glyphicon-plus"></span></td>
							<td><input class="form-control" type="text" name="music" size="3" maxlength="30" placeholder="Nhập Loại Nhạc"></td>
							<td><input class="form-control" type="text" name="type" size="2" maxlength="10" placeholder="Nhập Mã Nhạc"></td>
							</form>
							<td><button onclick="addmusic();" class="btn btn-success"></span> Thêm Loại Nhạc</button></td>
						</tr>
						</tbody>
					</table>
				</div>
				<center><div id="result"></div></center>
				
			</div>
			<div class="col-md-3">
				<div>
				<br>
					<form class="form-group" action="" id="form_addsong" enctype="multipart/form-data">
						<input class="form-control" type="text" name="name" placeholder="Tên Bài Hát">
						<br>
						<input class="form-control" type="text" name="author" placeholder="Tác Giả">
						<br>
						<input class="form-control" type="text" name="singer" placeholder="Ca Sĩ"><br>
						<label> Chọn Loại Nhạc:</label>
						<select class="form-control" name="type">
							<?php
							$sql = "select type,music from music";
							$result = $conn->query($sql);
							while($row = mysqli_fetch_assoc($result))
							{
								echo "<option value=".$row['type'].">".$row['music']."</option>";
							}
							?>
						</select><br>
						<input class="form-control" type="text" name="link" placeholder="Link Bài Hát">
						<input class="btup" type="file" name="link" id="link">
					</form>
					<div>
						<button  class="btn btn-success" onclick="addsong()" ></span> Thêm Bài Hát Mới</button>
						
					</div>
					<br>
					
				
				
			</div>
		</div>
		
    <hr>
        <div class="text-center center-block">
            
            <br />
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            
	            
	           
	</div>
	<div><button type="submit" class="btn btn-default" name="dangky" HREF="index.php">Đăng XUẤT</button>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>