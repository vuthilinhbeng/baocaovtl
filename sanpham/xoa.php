<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
    $id = $_GET['id'];
    $sql = "DELETE FROM `sanpham` WHERE  `id` = $id";
    // $query = mysqli_query($_con, $_sql);
    if($con->query($sql)===TRUE){
            
        header('location: admin.php?page_layout=danhsach');
    }
    

?>