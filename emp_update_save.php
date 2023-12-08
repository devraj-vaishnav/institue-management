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
$id=$_POST['id'];

$conn = new mysqli('localhost','root','','institute_db');

$sql = "update `emp` set title= '$title',name='$name',lname='$lname',fname='$fname',mname='$mname',mnumber='$mnumber',
wnumber='$wnumber',gmail='$gmail',radd='$radd',padd='$padd',salary='$salary' where id ='$id'";
$data=mysqli_query($conn,$sql);


if($data){
echo "Conform the data is updated";
}

else{
    echo "No updated";
}

 header("location:emp_detail.php");
}

?>