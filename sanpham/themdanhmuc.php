<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
     $sql_brand = "SELECT * FROM danhmuc";
     $query_brand = mysqli_query($con, $sql_brand);

     if(isset($_POST['sbm'])){
        $id_brand = $_POST['id_brand'];
        $LoaiHang = $_POST['LoaiHang'];

        $sql = "INSERT INTO `danhmuc` (`id_brand`,`LoaiHang`)
        VALUES ('$id_brand' ,'$LoaiHang')";
        if($con->query($sql)===TRUE){
            
            header('location: admin.php?page_layout=danhmuc');
        }
        
     }
?>
<div class = "container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Danh Mục</h2>
        </div>
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" >

           <div class = "form-group">
                <label for="">ID</label>
                <input type="number" name="id_brand" class = "form-control"  required >
            </div>

            <div class = "form-group">
                <label for="">Loại Hàng</label>
                <input type="text" name="LoaiHang" class = "form-control" required >
            </div>

            <button name = "sbm" type ="submit" class = "btn btn-success">Thêm</button>
           </form>
        </div>

        
    </div>
</div>