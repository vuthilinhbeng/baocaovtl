<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $id = $_GET['id_brand'];
    $sql = "SELECT * FROM `danhmuc` WHERE  `id_brand` = $id";
    // $query = mysqli_query($_con, $_sql);
    $query_sp = mysqli_query($con, $sql);
  
    $row_sp = mysqli_fetch_assoc($query_sp);

     $sql_brand = "SELECT * FROM danhmuc";
     $query_brand = mysqli_query($con, $sql_brand);

     if(isset($_POST['sbm'])){
        //$id = $_POST['id'];
        $LoaiHang= $_POST['LoaiHang'];

        $sql = "UPDATE  `danhmuc` SET `LoaiHang`='$LoaiHang'
        WHERE `id_brand`=$id";
        if($con->query($sql)===TRUE){
            
            header('location: admin.php?page_layout=danhmuc');
        }
        $query = mysqli_query($con, $sql);
     }
?> 

<div class = "container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Danh Mục</h2>
        </div>
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" >

           <div class = "form-group">
                <label for="">ID</label>
                <input type="text" name="id" class = "form-control"  required value="<?php echo($row_sp['id_brand']);?>" disabled>
            </div>

            <div class = "form-group">
                <label for="">Loại Hàng</label>
                <input type="text" name="LoaiHang" class = "form-control" required value="<?php echo($row_sp['LoaiHang']);?>">
            </div>
   
            <button name = "sbm" type ="submit" class = "btn btn-success">Sửa</button>
           </form>
        </div>

        
    </div>
</div>