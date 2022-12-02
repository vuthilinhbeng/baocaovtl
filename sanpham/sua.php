<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM `sanpham` WHERE  `id` = $id";
    // $query = mysqli_query($_con, $_sql);
    $query_sp = mysqli_query($con, $sql);
  
    $row_sp = mysqli_fetch_assoc($query_sp);
    // echo( $row_sp['image']);
    $imgsp = $row_sp['image'];
    
     $sql_brand = "SELECT * FROM danhmuc";
     $query_brand = mysqli_query($con, $sql_brand);

     if(isset($_POST['sbm'])){
        //$id = $_POST['id'];
        $name = $_POST['name'];
        $code = $_POST['code'];

        $image = $_FILES['image']['name'];
        echo($image);
        echo("hihihihi");
        $image_tmp = $_FILES['image']['tmp_name'];
        echo($image_tmp);
      
        echo("hoho");
        $price = $_POST['price'];
        $ngaycapnhat = $_POST['ngaycapnhat'];
        $ngaytao= $_POST['ngaytao'];
        $SoLuong = $_POST['SoLuong'];
        $id_brand= $_POST['id_brand'];

        if($image_tmp == '')
        {
        $sql = "UPDATE  `sanpham` SET `name`='$name',`code`='$code',`image`='$imgsp',`price`=$price,`ngaycapnhat`='$ngaycapnhat',`ngaytao`='$ngaytao',`id_brand`=$id_brand,`SoLuong`=$SoLuong
        WHERE `id`=$id";
        if($con->query($sql)===TRUE){
            
            header('location: admin.php?page_layout=danhsach');
        }
        $query = mysqli_query($con, $sql);
        move_uploaded_file($image_tmp, 'imge/'.$image);
        }
        else{
            $sql = "UPDATE  `sanpham` SET `name`='$name',`code`='$code',`image`='imge/$image',`price`=$price,`ngaycapnhat`='$ngaycapnhat',`ngaytao`='$ngaytao',`id_brand`=$id_brand,`SoLuong`=$SoLuong
            WHERE `id`=$id";
            if($con->query($sql)===TRUE){
                
                header('location: admin.php?page_layout=danhsach');
            }
            $query = mysqli_query($con, $sql);
            move_uploaded_file($image_tmp, 'imge/'.$image);
        }
       
     }
      
     

?> 

<div class = "container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Sản Phẩm</h2>
        </div>
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" >

           <div class = "form-group">
                <label for="">ID</label>
                <input type="number" name="id" class = "form-control"  required value="<?php echo($row_sp['id']);?>" disabled>
            </div>

            <div class = "form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class = "form-control" required value="<?php echo($row_sp['name']);?>">
            </div>

            <div class = "form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="code" class = "form-control" required value="<?php echo($row_sp['code']);?>">
            </div>

            <div class = "form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" name="image" value="<?php echo($row_sp['image']);?>" > <br>
                <img src="<?php echo($row_sp['image']);?>" alt="" style="width:100px">
            </div>

            <div class = "form-group">
                <label for="">Giá sản phẩm</label>
                <input type="number" name="price" class = "form-control" required value="<?php echo($row_sp['price']);?>">
            </div>
            <div class = "form-group">
                <label for="">Ngày cập nhật</label>
                <input type="text" name="ngaycapnhat" class = "form-control" required value="<?php echo($row_sp['ngaycapnhat']);?>">
            </div>

            <div class = "form-group">
                <label for="">Ngày tạo</label>
                <input type="text" name="ngaytao" class = "form-control" required value="<?php echo($row_sp['ngaytao']);?>">
            </div>

            <div class = "form-group">
                <label for="">Số lượng</label>
                <input type="number" name="SoLuong" class = "form-control" required value="<?php echo($row_sp['SoLuong']);?>">
            </div> 

            <div class="form-group">
              <label for="">Danh mục</label>
              <select class="form-control" name="id_brand" id="">
               <?php
               while($row_brand = mysqli_fetch_assoc($query_brand)) { ?>
                    <option value=" <?php echo $row_brand['id_brand']; ?>" <?php if($row_brand['id_brand'] == $row_sp['id_brand'])echo("selected") ?> > <?php echo $row_brand['LoaiHang']; ?></option>
              <?php } ?>
               
              </select>
            </div>

            <button name = "sbm" type ="submit" class = "btn btn-success">Sửa</button>
           </form>
        </div>

        
    </div>
</div>