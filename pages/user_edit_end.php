<?php
include('required/base.php');

$user_id=$_POST['user_id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$privilege=$_POST['privilege'];

echo $user_id;
echo $name;
echo $surname;
echo $privilege;



$sql = "UPDATE users SET privilege='{$privilege}' WHERE user_id='{$user_id}'";

if (mysqli_query($conn, $sql)) {
    echo ("<script >
  window.alert('Uspesan upis');
   window.location.href='?p=user_list';
  </script>");
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>