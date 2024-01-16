<?php
	session_start();

	if (empty($_SESSION['username'])) {
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
				<li class="nav-item"><a class="nav-link" href="cau1.php">Câu 1</a></li>
			</ul>

      <img class="my-5" src="cau1.png" alt="cau1" style="width: 100%; height: auto;">
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