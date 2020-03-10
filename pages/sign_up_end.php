<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$psw=$_POST['psw'];

include('required/base.php');

$sql = "INSERT INTO `users` (`user_id`, `name`, `surname`, `email`, `psw`, `privilege`)
        VALUES (NULL, '{$name}', '{$surname}', '{$email}', '{$psw}', 6)";

if (mysqli_query($conn, $sql)) {
    echo ("<script >
    window.alert('Uspesan upis');
    window.location.href='?p=main';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>