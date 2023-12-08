<?php

if(isset($_POST["submit"])){
$name=$_POST['name'];
$att=$_POST['att'];




$conn = new mysqli('localhost','root','','institute_db');

$sql = "insert into `att` (name,att) value
 ('$name','$att')";
$data=mysqli_query($conn,$sql);


if($data){
echo "<script>alert('Conform the data is updated')</script>";
}

else{
    echo "<script>alert('Conform the data is updated')</script>";
}

 header("location:att_detail.php");
}

?>