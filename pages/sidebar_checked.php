<?php
if (isset($_SESSION['email'])){
if ($_SESSION['privilege'] == '1'){
    echo '<a href="?p=new_info"><li>New Info</li></a>
    <a href="?p=user_list"><li>User List</li></a>';
}
elseif ($_SESSION['privilege'] == '2'){
    echo '<a href="?p=new_info"><li>New Info</li></a>';
}}
?>
