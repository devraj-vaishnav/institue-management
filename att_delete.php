<?php
if(isset($_GET['id'])) {
    include "db.php"; 
    $id=$_GET['id'];
    $sql= "DELETE FROM att  WHERE `id` = $id" ;
    $query = $conn->query($sql);
    if($query){
        echo "data is delete";
    }
    else{
        echo "data is not delete";
    }
 header("location:att_detail.php");  
}
?>