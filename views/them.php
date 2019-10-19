<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sách</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-info border">
		<div class="title">
			<h4>Danh sách sách</h4>
		</div>

		<form action="?page=<?php if(isset($sach)) echo "suas"; else echo "thems" ?>" method="post">
			<input type="hidden" name="id" value="<?php if(isset($sach)) echo $sach['id'] ?>">
			<div class="form-item">
				<label >Tên sách</label>
				<input type="text" name="ten" value="<?php if(isset($sach)) echo $sach['name'] ?>" required>
			</div>

			<div class="form-item">
				<label >Giá sách</label>
				<input type="number" name="gia" min="0" value="<?php if(isset($sach)) echo $sach['giasach'] ?>" required>
			</div>

			<div class="form-item">
				<label >Nhà xuất bản sách</label>
				<input type="text" name="nxb" value="<?php if(isset($sach)) echo $sach['nxb'] ?>" required>
			</div>
			
			<div class="form-item">
				<input type="submit" class="btn" value="<?php if(isset($sach)) echo "Sửa thông tin sách"; else echo "Thêm sách" ?>"> 
				<a href="?page=index" class="btn">Quay lại</a>
			</div>

		</form>
	</div>
</body>
</html>