<?php

if(isset($_POST["submit"])){
$title=$_POST['title'];
$name=$_POST['name'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$mnumber=$_POST['mnumber'];
$wnumber=$_POST['wnumber'];
$gmail=$_POST['gmail'];
$radd=$_POST['radd'];
$padd=$_POST['padd'];
$salary=$_POST['salary'];


$conn = new mysqli('localhost','root','','institute_db');

$sql = "insert into `emp` (title,name,lname,fname,mname,mnumber,wnumber,gmail,radd,padd,salary) value
 ('$title','$name','$lname','$fname','$mname','$mnumber','$wnumber','$gmail','$radd','$padd','$salary')";
$data=mysqli_query($conn,$sql);


if($data){
echo "<script>alert('Conform the data is updated')</script>";
}

else{
    echo "<script>alert('Conform the data is updated')</script>";
}

 header("location:emp_detail.php");
}

?>