<?php
$con = mysqli_connect("localhost","root","","blackrouge",3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
    $ID_User = $_GET['ID_User'];
    $sql = "DELETE FROM `dangky` WHERE  `ID_User` = $ID_User";
    // $query = mysqli_query($_con, $_sql);
    if($con->query($sql)===TRUE){
            
        header('location: admin.php?page_layout=danhsachtaikhoan');
    }
?>