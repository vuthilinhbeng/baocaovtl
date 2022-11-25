<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
     $sql_brand = "SELECT * FROM danhmuc";
     $query_brand = mysqli_query($con, $sql_brand);

     if(isset($_POST['sbm'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $code = $_POST['code'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $price = $_POST['price'];
        $ngaycapnhat = $_POST['ngaycapnhat'];
        $ngaytao= $_POST['ngaytao'];
        $SoLuong = $_POST['SoLuong'];
        $id_brand= $_POST['id_brand'];

        $sql = "INSERT INTO `sanpham` (`id`,`name`,`code`,`image`,`price`,`ngaycapnhat`,`ngaytao`,`id_brand`,`SoLuong`)
        VALUES ($id,'$name','$code','imge/$image',$price,'$ngaycapnhat','$ngaytao',$id_brand, $SoLuong)";
        if($con->query($sql)===TRUE){
            
            header('location: admin.php?page_layout=danhsach');
        }
        // $query = mysqli_query($con, $sql);
        move_uploaded_file($image_tmp, 'imge/'.$image);
        
     }
?>
<div class = "container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" >

           <div class = "form-group">
                <label for="">ID</label>
                <input type="number" name="id" class = "form-control"  required >
            </div>

            <div class = "form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class = "form-control" required >
            </div>

            <div class = "form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="code" class = "form-control" required>
            </div>

            <div class = "form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" name="image" > <br>
            </div>

            <div class = "form-group">
                <label for="">Giá sản phẩm</label>
                <input type="number" name="price" class = "form-control" required>
            </div>
            <div class = "form-group">
                <label for="">Ngày cập nhật</label>
                <input type="text" name="ngaycapnhat" class = "form-control" required>
            </div>

            <div class = "form-group">
                <label for="">Ngày tạo</label>
                <input type="text" name="ngaytao" class = "form-control" required>
            </div>

            <div class = "form-group">
                <label for="">Số lượng</label>
                <input type="number" name="SoLuong" class = "form-control" required >
            </div> 

            <div class="form-group">
              <label for="">Danh mục</label>
              <select class="form-control" name="id_brand" id="">
               <?php
               while($row_brand = mysqli_fetch_assoc($query_brand)) { ?>
                    <option value=" <?php echo $row_brand['id_brand']; ?> "><?php echo $row_brand['LoaiHang']; ?></option>
              <?php } ?>
               
              </select>
            </div>

            <button name = "sbm" type ="submit" class = "btn btn-success">Thêm</button>
           </form>
        </div>

        
    </div>
</div>