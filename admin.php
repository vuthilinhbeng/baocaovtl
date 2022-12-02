<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>ADMIN</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'danhsach':
                    require_once 'sanpham/danhsach.php';
                    break;

                case 'danhmuc':
                    require_once 'sanpham/danhmuc.php';
                    break;

                case 'themdanhmuc':
                    require_once 'sanpham/themdanhmuc.php';
                    break;

                case 'suadanhmuc':
                    require_once 'sanpham/suadanhmuc.php';
                    break;
                    
                case 'xoadanhmuc':
                    require_once 'sanpham/xoadanhmuc.php';
                    break;

                case 'danhsachtaikhoan':
                    require_once 'sanpham/danhsachtaikhoan.php';
                    break;

                case 'themtaikhoan':
                    require_once 'sanpham/themtaikhoan.php';
                    break;
    
                case 'suataikhoan':
                    require_once 'sanpham/suataikhoan.php';
                    break;
                        
                case 'xoataikhoan':
                    require_once 'sanpham/xoataikhoan.php';
                    break;

                case 'them':
                    require_once 'sanpham/them.php';
                    break;
    
                case 'sua':
                    require_once 'sanpham/sua.php';
                    break;
    
                case 'xoa':
                    require_once 'sanpham/xoa.php';
                    break;     
                    
                default:
                    require_once 'sanpham/danhsach.php';
                    break;
            }
           
        }
        else{
            require_once 'sanpham/danhsach.php';
        }
    ?>
    
</body>
</html>