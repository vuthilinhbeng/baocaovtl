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