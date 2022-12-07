<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
     session_start();
     if(isset($_SESSION['TEN'])){
        header('location:admin.php');
     }
    
     if(isset($_POST['sbm'])){
        $TEN= $_POST['TEN'];
        $PASSWORD= $_POST['PASSWORD'];
        
        $query = mysqli_query($con, "SELECT * FROM dangky WHERE TEN='$TEN'");
        $row = mysqli_fetch_array($query);

        if (mysqli_num_rows($query) == 0) {
            echo '<script>alert("Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.")</script>';
        } else if ($PASSWORD != $row["PASSWORD"]) {
            echo '<script>alert("Mật khẩu không đúng. Vui lòng nhập lại.")</script>';
        } else {
            $_SESSION['TEN'] = $TEN;
            header('location:admin.php');
        }
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dangnhapadmin.css">
    <title>Chào Mừng ADMIN</title>
</head>
<body>
<div class = "container-fluid">
    <div class="card" >

        <div class="dangnhap_top">
                <img src="./imge/logo.webp" alt="">
        </div>
        <div class="card-header">
            <h2>Chào Mừng ADMIN</h2>
        </div>
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" action="dangnhapadmin.php">

           <div class = "form-group">
                <label for="">TÊN::</label>
                <input type="text" name="TEN" class = "form-control"  required >
            </div>

            <div class = "form-group">
                <label for="">MẬT KHẨU::</label>
                <input type="password" name="PASSWORD" class = "form-control" required >
            </div>

            <button name = "sbm" type ="submit" class = "btn btn-success">ĐĂNG NHẬP ADMIN</button>
           </form>
        </div>

        
    </div>
</div>
</body>
</html>
