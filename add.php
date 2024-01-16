<?php
  session_start();
  if (empty($_SESSION['username'])) {
    header('Location: login.php');
  }

  include 'connect.php';

  // $id = $_GET['id'];
  // $sql = "SELECT thannhan.id, ten, quanhe, thannhan.dienthoai FROM thannhan 
  //   INNER JOIN nhansu ON thannhan.nhansu_id = nhansu.id
  //   WHERE nhansu.id = '$id'";
  // $stmt = $conn->prepare($sql);
  // $stmt->execute();
  // $data = $stmt->fetchAll();

  // if (!empty($_POST['submit'])) {
  //   if (strlen($_POST['ten']) && strlen($_POST['quanhe']) && strlen($_POST['dienthoai'])) {
  //     $ten = $_POST['ten'];
  //     $quanhe = $_POST['quanhe'];
  //     $dienthoai = $_POST['dienthoai'];

  //     $sql = "INSERT INTO thannhan (nhansu_id, ten, quanhe, dienthoai)
  //       VALUES ('$id', '$ten', '$quanhe', '$dienthoai')";
  //     $stmt = $conn->prepare($sql);

  //     try {
  //       $stmt->execute();
  //       header('Location: add.php?id='.$id.'');
  //     } catch (Exception $e) {
  //       echo '
  //         <script>
  //           alert("Thêm dữ liệu thất bại");
  //         </script>
  //       ';
  //     }
  //   } else {
  //     echo '
  //       <script>
  //         alert("Trống");
  //       </script>
  //     ';
  //   }
  // }
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
        <div class="form-group">
          <label>Họ và tên</label>
          <input class="form-control" type="text" name="ten" placeholder="Nhập họ và tên thân nhân">
        </div>
        <div class="form-group">
          <label>Quan hệ</label>
          <input class="form-control" type="text" name="quanhe" placeholder="Nhập quan hệ">
        </div>
        <div class="form-group">
          <label>Điện thoại</label>
          <input class="form-control" type="text" name="dienthoai" placeholder="Nhập số điện thoại">
        </div>
        <button class="btn btn-success" type="submit" name="submit" value="submit">Thêm</button>
      </form>

      <table class="table table-inverse">
        <thead>
          <tr>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Quan hệ</th>
            <th>Điện thoại</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($data as $key => $value) {
              echo '
                <tr>
                  <td>'.$value['id'].'</td>
                  <td>'.$value['ten'].'</td>
                  <td>'.$value['quanhe'].'</td>
                  <td>'.$value['dienthoai'].'</td>
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