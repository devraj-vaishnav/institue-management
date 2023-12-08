<?php
if(isset($_GET['id'])) {
    include "db.php"; 
    $id=$_GET['id'];
    $sql= "DELETE FROM emp  WHERE `id` = $id" ;
    $query = $conn->query($sql);
    if($query){
        echo "data is delete";
    }
    else{
        echo "data is not delete";
    }
 header("location:emp_detail.php");  
}
?>