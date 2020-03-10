<?php

    if(isset($_SESSION['privilege'])){
        if ($_SESSION['privilege']==1){
        }
        else {
            echo ("<script >
            window.alert('Nemate prava biti ovde!');
             window.location.href='?p=main';
            </script>");
        }
    }
    else {
        echo ("<script >
  window.alert('Nemate prava biti ovde!');
   window.location.href='?p=login';
  </script>");
    }

?>