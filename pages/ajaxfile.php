<?php
include "required/base.php";

$userid = $_POST['userid'];

$sql = "select * from users where user_id=".$userid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
    $id = $row['user_id'];
    $emp_name = $row['name'];
    $salary = $row['email'];
    $gender = $row['psw'];
    $city = $row['surname'];
    $email = $row['privilege'];
   
   
}
$response .= ' <div style="width:100%;">
<div style="background-color: rgba(0,0,0,0.8);
width:100%;
height:100vh;
position: inherit;">
<div class="bet11">
<div class="date11">21.02.</div>
<h3>ime opklade</h3>
<p>ulog: <span>7</span> unita</p>
<div class="schadule1">
    <div class="game1">
        <p>20:00
        Evertona-Man.Utd Evertona-Man.Utd Evertona-Man.Utd <span>3+</span></p>
    </div>
    <div class="game1">
        <p>20:00
        Evertona-Man.Utd <span>3+</span></p>
    </div>
    <div class="game1">
        <p>20:00
        Evertona-Man.Utd <span>3+</span></p>
    </div>
    </div>
    <div class="odd1">
        <p><span>6,14</span>(soccer)</p> 
    </div> 
    <div class="analize1">
        <h2>Analisys</h2>
        <p>Good day guys and welcome to my analysis of this match. The home team is favorite in this match and I feel they can get a win in this match as they have lost just one game in their last six home games while the away team have won just one of their last six away games.</p>
    </div>
</div>';

echo $response;
exit;