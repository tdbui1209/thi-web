<?php
  session_start();

  include 'connect.php';
  if (!empty($_SESSION['username'])) {
    header('Location: index.php');
  }
  
  if (!empty($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT username, matkhau FROM user WHERE username = '$username' LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    if (!empty($data)) {
      $data = $data[0];
      if ($data['matkhau'] != $password) {
        echo '
          <script>
            alert("Sai mật khẩu");
          </script>
        ';
      } else {
        $_SESSION['username'] = $username;
        $_SESSION['datetime'] = date('d/m/Y H:i:s');
        header('Location: index.php');
      }
    } else {
      echo '
        <script>
          alert("Tài khoản không tồn tại");
        </script>
      ';
    }
  }
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
  <header class="my-3">Đăng nhập</header>
	<content>
    <div class="container">
      <form method="post">
        <div class="form-group">
          <label>Tài khoản</label>
          <input class="form-control" type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
          <label>Mật khẩu</label>
          <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
        </div>
        <button class="btn btn-primary" type="submit" name="submit" value="submit">Đăng nhập</button>
      </form>
    </div>
  </content>
  <footer>87746 - Bùi Tùng Dương - CNT61CL</footer>
</body>
</html>