<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Developful">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <link href="css/Univers-LT-Std-85-Extra-Black-Oblique_46352.ttf" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/d58988c1f01b461ae3713a831dbce1a4?family=Univers+LT+Std" rel="stylesheet" type="text/css"/>

    <style>
.dropbtn {
  display: inline-block;
    text-decoration: none;
    list-style-type:none;
    color:white;
    padding:15px 15px;
    text-transform: uppercase;
    font-size: 20px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-image:linear-gradient(to bottom,rgb(25, 181, 254),rgb(43, 42, 42));
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* .dropdown-content a:hover {background-color: #ddd;} */

.dropdown:hover .dropdown-content {display: block;}

/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>

    <title>Bet Expert</title>
</head>

<body class="background">
    <div class="container-fluid">
        <div class="fluid-wrap">
                <div class="section header blue ">
                    <div class="container">
                    <div class="nav ">
                        <div class="name" style="font-family:Univers--Extra--Black; font-size:36px;"></div>
                        <ul>
                            <a href="?p=main"><li>Home</li></a>
                            <a href=""><li>Škola Klađenja</li></a>
                            <div class="dropdown">
                                    <a class="dropbtn">Pretplati se</a>
                                    <div class="dropdown-content">


                                    <?php
                                    include "required/base.php";
                                    $read_groups = $conn ->query("SELECT
                                    *
                                    FROM
                                    groups WHERE group_id!=1");
                                    while($row = mysqli_fetch_array($read_groups)){
                                        $tip_idd = $row['group_id'];
                                        $group_name = $row['group_name'];
                                        $permission = $row['permission'];

                                        if ($tip_idd == 3){
                                            echo '<a data-id="'.$tip_idd.'" class="groupinfo" style="text-decoration:none;background-color:#89C4F4; cursor:pointer;
                                            ">'.$group_name.'</a>';
                                        }
                                    else if ($tip_idd == 4) {
                                            echo '<a data-id="'.$tip_idd.'" class="groupinfo" style="text-decoration:none;background-color:#A9A9A9; cursor:pointer;
                                            ">'.$group_name.'</a>';
                                    }
                                    else if ($tip_idd == 5){
                                        echo '<a data-id="'.$tip_idd.'" class="groupinfo" style="text-decoration:none;background-color:#D4AF37; cursor:pointer;
                                        ">'.$group_name.'</a>';

                                    }
                                }
                                    ?>
                                    </div>
                                    </div>



                            <a href=""><li>O nama</li></a>
                            <?php
                            if (isset($_SESSION['email'])){
                                echo '<div class="dropdown">
                                    <a class="dropbtn">' .$_SESSION['user_print']. '</a>
                                    <div class="dropdown-content">
                                
                                <a href="?p=logout">Logout</a> </div></div>';}
                                else {
                                    echo '<a href="?p=login">Login</a>';
                                    echo '<a href="?p=sign_up">Sign Up</a>';
                                }
                                ?>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="section main">
                    <div class="sidebar ">
                        <ul>
                            <a href="?p=main"><li>Free Tips</li></a>
                            <a href="?p=free_info"><li>Free INFO</li></a>
                            <a href="?p=vip_info" style="background-color:#89C4F4;"><li>VIP INFO</li></a>
                            <a href="?p=silver_tips" style="background-color:#A9A9A9;"><li style="font-size: 26px;">Silver Tips</li></a>
                            <a href="?p=gold_tips" style="background-color:#D4AF37;"><li style="font-size: 32px;">Gold Tips</li></a>
                            <?php include('pages/sidebar_checked.php');?>
                    </ul>
                </div>
<?php
$default = 'main';

if (isset($_GET['p'])==''){
    $page = $default;
}
else {
    $page = $_GET['p'];
}
?>
                <?php
        if (file_exists('pages/'.$page.'.php'))
        {include('pages/'.$page.'.php');}
        ?>
            </div>
            <div class="section footer"></div>
        </div>
    </div>











    <div class="container" >
            <!-- Modal -->
            <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">                         
                          <h4 class="modal-title">
</h4>
                        </div>
                        <div class="modal-body">                         
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>





            <script type='text/javascript'>
            $(document).ready(function(){

                $('.groupinfo').click(function(){
                   
                    var tipid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'nav_ajaxfile.php',
                        type: 'post',
                        data: {tipid: tipid},
                        success: function(response){ 
                            // Add response in Modal body
                            // $('.modal-body').html(naslov); 

                            
                            // Add response in Modal body
                            $('.modal-body').html(response); 

                            // Display Modal
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
</body>
</html>