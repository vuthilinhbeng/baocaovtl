<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
    $sql = "SELECT * FROM sanpham INNER JOIN danhmuc on sanpham.id_brand = danhmuc.id_brand";
    $query = mysqli_query($con, $sql);
?>
<div>

<div id="content-wrapper">
    <div class="container">
        <div class="left-menu">
            <div class="menu-heading">
                Admin Menu
            </div>
            <div class="menu-items">
                <ul>
                    <li>Danh Mục</li>
                    <li>Sản Phẩm</li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="contain-fluid">
    <div class="card">
        <div class="card-heard">
            <h2>Danh sách sản phẩm</h4>
        </div>
        <div class="card-body">
            <table class = "table">
                <thead class = "thead-dark">
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
            <a class="btn btn-primary" href="admin.php?page_layout=them">Thêm</a>
        </div>
    </div>
</div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + "?");
    }
</script>