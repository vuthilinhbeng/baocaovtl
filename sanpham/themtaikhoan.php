<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
     $sql_brand = "SELECT * FROM dangky";
     $query_brand = mysqli_query($con, $sql_brand);

     if(isset($_POST['sbm'])){
        $ID_User= $_POST['ID_User'];
        $TEN= $_POST['TEN'];
        $NGAYSINH= $_POST['NGAYSINH'];
        $GIOITINH= $_POST['GIOITINH'];
        $EMAIL= $_POST['EMAIL'];
        $PASSWORD= $_POST['PASSWORD'];
        $ADMIN= $_POST['ADMIN'];
  
        $sql = "INSERT INTO `dangky` (`ID_User`,`TEN`,`NGAYSINH`,`GIOITINH`,`EMAIL`,`PASSWORD`,`ADMIN`)
        VALUES ('$ID_User' ,'$TEN' ,'$NGAYSINH' ,'$GIOITINH' ,'$EMAIL' ,'$PASSWORD' ,'$ADMIN')";
        if($con->query($sql)===TRUE){
            
            header('location: admin.php?page_layout=danhsachtaikhoan');
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
                <input type="text" name="ID_User" class = "form-control"  required >
            </div>

            <div class = "form-group">
                <label for="">Tên</label>
                <input type="text" name="TEN" class = "form-control" required>
            </div>

            <div class = "form-group">
                <label for="">Ngày Sinh</label>
                <input type="text" name="NGAYSINH" class = "form-control" required >
            </div>

            <div class = "form-group">
                <label for="">Giới Tính</label>
                <input type="text" name="GIOITINH" class = "form-control" required >
            </div>

            <div class = "form-group">
                <label for="">EMAIL</label>
                <input type="text" name="EMAIL" class = "form-control" required >
            </div>

            <div class = "form-group">
                <label for="">Mật Khẩu</label>
                <input type="text" name="PASSWORD" class = "form-control" required >
            </div>

            <div class = "form-group">
                <label for="">ADMIN</label>
                <input type="text" name="ADMIN" class = "form-control" required >
            </div>


            <button name = "sbm" type ="submit" class = "btn btn-success">Thêm</button>
           </form>
        </div>

        
    </div>
</div>