<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "aiv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection attempt unsuccessful: " . $conn->connect_error);
}
echo "Connected successfully";


//    if ($conn->connect_error) {
//        die("failed: " . $conn->connect_error);
//     } 
//     if(isset($_POST['submit']))
//          {

//             $name=$_POST['name'];
//             $code=$_POST['code'];
//             $quantity=$_POST['quantity'];
//             $sql = "INSERT INTO order_final (name, code, quantity)
//             VALUES ('$name', '$code', '$quantity')";
//             if ($conn->query($sql) === TRUE) {
//                 }
//         else{   echo 'query doesnt execute';
//          }
?>