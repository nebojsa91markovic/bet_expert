<?php
include "required/base.php";

$group_id = $_POST['tipid'];


$r_groups = $conn ->query("SELECT
*
FROM
groups
WHERE
group_id='{$group_id}'");

if ($r_groups->num_rows > 0)
{
   while($row = $r_groups->fetch_assoc())
   {
    $group_name = $row['group_name'];
    $id_group = $row['group_id'];
}}

if ($id_group == '3'){
$response = "<table border='0' width='100%'>";
$response = '<div class="m-title" >
<div style="  position: relative;
margin-left: auto;
margin-right: auto;
  width: 100%;
  text-align: center;
  font-size: 30px;text-transform: uppercase; background-color:#89C4F4;"> '.$group_name.'</div>
</div>
<div class="analize1">
    <h2 style="  position: relative;
    margin-left: auto;
    margin-right: auto;
      width: 100%;
      text-align: center;
      font-size: 24px;text-transform: uppercase;">Šta je VIP INFO</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</div>
<button style="border-radius: 8px; padding: 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 26px;
margin-left: auto;
margin-right: auto;
width:100%;
cursor: pointer; background-color:#89C4F4;"><b>Pretplati se </b></button>';
}
else if ($id_group == '4'){
    $response = "<table border='0' width='100%'>";
    $response = '<div class="m-title" >
    <div style="  position: relative;
    margin-left: auto;
    margin-right: auto;
      width: 100%;
      text-align: center;
      font-size: 30px;text-transform: uppercase; background-color:#A9A9A9;"> '.$group_name.'</div>
    </div>
    <div class="analize1">
        <h2 style="  position: relative;
        margin-left: auto;
        margin-right: auto;
          width: 100%;
          text-align: center;
          font-size: 24px;text-transform: uppercase;">Šta je VIP INFO</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    </div>
    <button style="border-radius: 8px; padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px;
    margin-left: auto;
    margin-right: auto;
    width:100%;
    cursor: pointer; background-color:#A9A9A9;"><b>Pretplati se </b></button>';
}
else if ($id_group == '5'){
    $response = "<table border='0' width='100%'>";
    $response = '<div class="m-title" >
    <div style="  position: relative;
    margin-left: auto;
    margin-right: auto;
      width: 100%;
      text-align: center;
      font-size: 30px;text-transform: uppercase; background-color:#D4AF37;"> '.$group_name.'</div>
    </div>
    <div class="analize1">
        <h2 style="  position: relative;
        margin-left: auto;
        margin-right: auto;
          width: 100%;
          text-align: center;
          font-size: 24px;text-transform: uppercase;">Šta je VIP INFO</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    </div>
    <button style="border-radius: 8px; padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px;
    margin-left: auto;
    margin-right: auto;
    width:100%;
    cursor: pointer; background-color:#D4AF37;"><b>Pretplati se </b></button>';
}
else {
    $response='';
}

echo $response;
exit;