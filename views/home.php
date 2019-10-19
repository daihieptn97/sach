<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container border p-t-20">
		<div class="title">
			<h4>Danh sách sách</h4>
		</div>
		<a href="?page=them" >
			Thêm sách
		</a>
		<table  width="100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sách</th>
					<th>
						<a href="?page=index&sort=<?php if($_GET['sort'] == "desc") echo "asc"; else echo "desc" ?>">Giá sách</a>
					</th>
					<th>Nhà xuất bản</th>
					<th>Thời gian</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php while( $r = $dataHome->fetch_assoc() ): ?>
					<tr>
						<td><?= $r['id'] ?></td>
						<td><?= $r['name'] ?></td>
						<td><?= $r['giasach'] ?></td>
						<td><?= $r['nxb'] ?></td>
						
						<td><?= date_format(new Datetime($r['time_create']), 'd-m-Y'); ?> </td>
						<td>
							<a href="?page=xoa&id=<?= $r['id'] ?>"  onclick="return confirm('ban co chac chan muon xoa khong ?')" >Xoa</a> |
							<a href="?page=sua&id=<?= $r['id'] ?>">Sua</a> 
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</body>
</html>