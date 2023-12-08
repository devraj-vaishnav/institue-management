


<?php
// if (isset($_POST["submit"])) {
//     $name = $_POST['name'];
//     $att = $_POST['att'];
//     $id = $_POST['id'];

//     try {
//         $conn = new PDO('mysql:host=localhost;dbname=institute_db', 'root', '');

//         $sql = "UPDATE `att` SET name = :name, att = :att WHERE id = :id";
//         $stmt = $conn->prepare($sql);

//         $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//         $stmt->bindParam(':att', $att, PDO::PARAM_STR);
//         $stmt->bindParam(':id', $id, PDO::PARAM_INT);

//         $result = $stmt->execute();

//         if ($result) {
//             echo "Data is updated";
//         } else {
//             echo "No updated";
//         }
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
//  header("location:att_detail.php");
//     // Close the database connection
//     $conn = null;
//}
?>

<?php
if(isset($_POST["submit"])){
$name=$_POST['name'];
$att=$_POST['att'];
$id=$_POST['id'];


$conn = new mysqli('localhost','root','','institute_db');

$sql = "update `att` set name='$name', att='$att' where id ='$id'  ";
$data=mysqli_query($conn,$sql);


if($data){
echo " data is updated";
}

else{
    echo "No updated";
}

 header("location:att_detail.php");
}

?> 