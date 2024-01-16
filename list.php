<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header('Location: login.php');
	}

	// include 'connect.php';

	// if (!empty($_POST['search'])) {
	// 	$search_text = $_POST['search_text'];
	// 	$sql = "SELECT nhansu.id, phongban.ten AS tenphongban, trangthai, trinhdohocvan.ten AS tentrinhdo, hovaten, nhansu.dienthoai, email
	// 		FROM nhansu
	// 		INNER JOIN phongban ON nhansu.phongban_id = phongban.id
	// 		INNER JOIN trinhdohocvan ON nhansu.trinhdo_id = trinhdohocvan.id
	// 		WHERE hovaten LIKE '%$search_text%'";
	// } else {
	// 	$sql = "SELECT nhansu.id, phongban.ten AS tenphongban, trangthai, trinhdohocvan.ten AS tentrinhdo, hovaten, nhansu.dienthoai, email
	// 		FROM nhansu
	// 		INNER JOIN phongban ON nhansu.phongban_id = phongban.id
	// 		INNER JOIN trinhdohocvan ON nhansu.trinhdo_id = trinhdohocvan.id";
	// }
	// $stmt = $conn->prepare($sql);
	// $stmt->execute();
	// $data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="my-3">
		<div class="container">
			<p>Bài thi kết thúc học phần <i class="bi bi-apple"></i></p>
			<button class="btn btn-danger"><a href="logout.php">Đăng xuất</a></button>
		</div>
	</header>
	<content>
		<div class="container">
			<ul class="nav">
				<li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
				<li class="nav-item"><a class="nav-link" href="list.php">Danh sách nhân sự</a></li>
				<li class="nav-item"><a class="nav-link" href="cau1.png">Câu 1</a></li>
			</ul>

			<form class="my-3" method="post">
				<div class="input-group">
					<input type="text" name="search_text" placeholder="Nhập họ và tên nhân viên">
					<button class="btn btn-secondary" type="submit" name="search" value="search">Tìm kiếm</button>
				</div>
			</form>
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>ID</th>
						<th>Phòng ban</th>
						<th>Trạng thái</th>
						<th>Trình độ</th>
						<th>Họ và tên</th>
						<th>Điện thoại</th>
						<th>Email</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data as $key => $value) {
							echo '
								<tr>
									<td>'.$value['id'].'</td>
									<td>'.$value['tenphongban'].'</td>
									<td>'.$value['trangthai'].'</td>
									<td>'.$value['tentrinhdo'].'</td>
									<td>'.$value['hovaten'].'</td>
									<td>'.$value['dienthoai'].'</td>
									<td>'.$value['email'].'</td>
									<td><a href="add.php?id='.$value['id'].'">Thân nhân</a></td>
								</tr>
							';
						}
					?>
				</tbody>
			</table>
		</div>
	</content>
	<footer>
		<div class="container">
			<p>87746 - Bùi Tùng Dương - CNT61CL</P>
			<?php
				echo '<p>Tài khoản đang đăng nhập: '.$_SESSION['username'].' '.$_SESSION['datetime'].'</p>';
			?>
		</div>
	</footer>
</body>
</html>