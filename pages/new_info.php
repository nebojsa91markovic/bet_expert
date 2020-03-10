<?php 
require_once('required/base.php');
require('required/admin_rights.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <div class="centar">
    <div class="tip">
     
     <a data-id="new_info" class="tipinfo" style="text-decoration:none;margin-left: auto;
margin-right: auto;
width:30%;">    <button style="border-radius: 8px; padding: 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 26px;

cursor: pointer; background-color:#42C259;" type="submit"><b>New Tips</b></button> </a>
                        
                        
                        
                        <h4>Your bets</h4>
    <?php 
                $query1 = "select * from tips  ORDER BY tip_id DESC";
                $result1 = mysqli_query($conn,$query1);
                while($row = mysqli_fetch_array($result1)){
                    $tip_id = $row['tip_id'];
                    $title = $row['title'];
                    $bet = $row['bet'];
                    $result = $row['result'];
                    $date = $row['date'];

                    echo '<div class="bet">';
                    echo '<div class="logo"></div>';
                    echo '<h2>'.$title.'</h2>';
                    if ($result == 0){
                        echo '<p class="result""><span style="color: blue;">U igri</span></p>';
                    }
                    else if ($result == 1){
                        echo '<p class="result win">WON</p>';
                    }
                    else if ($result == 2){
                        echo '<p class="result lost">LOST</p>';
                    }
                    else if ($result == 3){
                        echo '<p class="result void">ODLOZENO</p>';
                    }
                    echo '<div class="unit" style="cursor: pointer;">
                    <a data-id="'.$tip_id.'" class="tipinfo" style="text-decoration:none">';                    
                    echo '<span class="number">EDIT</span>';
                    // echo '<span class="valuta">unit</span>';
                    echo '</a></div>';
                    echo '</div>';
                }
                ?>
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
            <br/>
            <script type='text/javascript'>
            $(document).ready(function(){

                $('.tipinfo').click(function(){
                   
                    var tipid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: (tipid == 'new_info') ? 'newinfoajax.php' : 'infoajax_edit.php',
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
        </div>


    </body>
</html>


        