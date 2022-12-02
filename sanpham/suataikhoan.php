<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $ID_User = $_GET['ID_User'];
    $sql = "SELECT * FROM `dangky` WHERE  `ID_User` = $ID_User";
    $query_sp = mysqli_query($con, $sql);
  
    $row_sp = mysqli_fetch_assoc($query_sp);

     $sql_brand = "SELECT * FROM dangky";
     $query_brand = mysqli_query($con, $sql_brand);

     if(isset($_POST['sbm'])){
      //  $ID_User= $_POST['ID_User'];
        $TEN= $_POST['TEN'];
        $NGAYSINH= $_POST['NGAYSINH'];
        $GIOITINH= $_POST['GIOITINH'];
        $EMAIL= $_POST['EMAIL'];
        $PASSWORD= $_POST['PASSWORD'];
        $ADMIN= $_POST['ADMIN'];

        $sql = "UPDATE  `dangky` SET `TEN`='$TEN', `NGAYSINH`='$NGAYSINH', `GIOITINH`='$GIOITINH', `EMAIL`='$EMAIL', `PASSWORD`='$PASSWORD', `ADMIN`='$ADMIN'
        WHERE `ID_User`=$ID_User";
        if($con->query($sql)===TRUE){
            
            header('location: admin.php?page_layout=danhsachtaikhoan');
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
                <input type="text" name="ID_User" class = "form-control"  required value="<?php echo($row_sp['ID_User']);?>" disabled>
            </div>

            <div class = "form-group">
                <label for="">Tên</label>
                <input type="text" name="TEN" class = "form-control" required value="<?php echo($row_sp['TEN']);?>">
            </div>

            <div class = "form-group">
                <label for="">Ngày Sinh</label>
                <input type="text" name="NGAYSINH" class = "form-control" required value="<?php echo($row_sp['NGAYSINH']);?>">
            </div>

            <div class = "form-group">
                <label for="">Giới Tính</label>
                <input type="text" name="GIOITINH" class = "form-control" required value="<?php echo($row_sp['GIOITINH']);?>">
            </div>

            <div class = "form-group">
                <label for="">EMAIL</label>
                <input type="text" name="EMAIL" class = "form-control" required value="<?php echo($row_sp['EMAIL']);?>">
            </div>

            <div class = "form-group">
                <label for="">Mật Khẩu</label>
                <input type="text" name="PASSWORD" class = "form-control" required value="<?php echo($row_sp['PASSWORD']);?>">
            </div>

            <div class = "form-group">
                <label for="">ADMIN</label>
                <input type="text" name="ADMIN" class = "form-control" required value="<?php echo($row_sp['ADMIN']);?>">
            </div>

   
            <button name = "sbm" type ="submit" class = "btn btn-success">Sửa</button>
           </form>
        </div>

        
    </div>
</div>