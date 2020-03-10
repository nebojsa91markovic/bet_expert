
<!-- partial:index.partial.html -->
<!-- Bootstrap 4 CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/datatables.min.css"/>

<!-- Jquery, Popper.js, Bootstrap 4 JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- DataTable JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.0.0/jq-3.2.1/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/datatables.min.js"></script>



<div style="width:70%;   display:flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    margin-bottom:10px;
    padding:100px;
    background-color:rgb(250, 248, 245);
    border-radius: 10px;;);">




<!-- Table Example  -->
<table id="example" class="display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Office</th>
      <th>Age</th>
      <th>Start date</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tbody>
    <?php
$users = "select * from users  ORDER BY user_id ASC";
$res_user = mysqli_query($conn,$users);
while($row = mysqli_fetch_array($res_user)){
    $user_id = $row['user_id'];
    $name = $row['name'];
    $surname = $row['surname'];
    $privilege = $row['privilege'];

    echo ' <tr><form action="?p=user_edit_end" method="POST">
    <td><input type="text" value="'.$user_id.'" name="user_id" hidden> '.$user_id.'</td>
    <td><input type="text" value="'.$name.'" name="name" hidden>'.$name.'</td>
    <td><input type="text" value="'.$surname.'" name="surname" hidden>'.$surname.'</td>
    <td><select name="privilege" style="font-size:20px; margin-left: auto;
    margin-right: auto;">';
include ('pages/read_privilege.php');
    echo '</select></td>
    <td>'.$privilege.'</td>
    <td><button>Sacuvaj</button></td>
  </form></tr>';}
?>
  </tbody>
</table>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/4.13.0/d3.min.js'></script><script  src="./script.js"></script>

</div>