
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <title>ADMIN</title>
</head>
<body>
    
<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
    $sql = "SELECT * FROM sanpham INNER JOIN danhmuc on sanpham.id_brand = danhmuc.id_brand";
    $query = mysqli_query($con, $sql);
?>
<div style = "display: flex; margin-top:50px;">

<div class="content-wrapper">
    <div class="container">
        <div class="left-menu">
            <div class="menu-heading">
                Admin Menu
            </div>
            <div class="menu-items">
                <ul>
                    <li> <a href="admin.php?page_layout=danhmuc">Danh Mục</a></li>
                    <li><a href="">Sản Phẩm</a></li>
                    <li><a href="admin.php?page_layout=danhsachtaikhoan">Tài Khoản</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="contain-fluid" style = "width: 85%">
    <div class="card">
        <div class="card-heard">
            <h2>Danh sách sản phẩm</h4>
        </div>
        <div class="card-body">
        <a class="primary" href="admin.php?page_layout=them" style=" width: 80px; height: 30px; color: black;background-color: #23b891; border-color: #007bff; display: inline-block;text-align: center;border-radius: 5px; ">Thêm</a>

            <table class = "table">
                <thead style="  background: #e7a5be;">
                    <tr>
                        <th>#</th>
                        <th>ID </th>
                        <th>Tên Sản Phẩm</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Giá Sản Phẩm</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Ngày Tạo</th>
                        <th>Số Lượng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td> <?php echo $i++; ?> </td>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['code'] ?></td>

                                <td>
                                    <img style = "width: 100px;" src="./<?php echo $row['image']; ?> " >
                                </td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['ngaycapnhat'] ?></td>
                                <td><?php echo $row['ngaytao'] ?></td>
                                <td><?php echo $row['SoLuong'] ?></td>
                                <td> 
                                    <a href="admin.php?page_layout=sua&id=<?php echo $row['id']; ?>">Sửa</a> 
                               
                            
                                </td>
                                <td> 
                                    <a onclick="return Del('<?php echo $row['name'];  ?>')" href="admin.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xóa</a>
                                </td>
                            </tr> 
                        <?php }   ?>
            </table>
        </div>
    </div>
</div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + "?");
    }
</script>
</body>
</html>
