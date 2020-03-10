<?php

    if(isset($_SESSION['privilege'])){
        if ($_SESSION['privilege']==3 or $_SESSION['privilege']==1 or $_SESSION['privilege']==5){
        }
        else {
            echo ("<script >
  window.alert('Morate postati VIP INFO ili Gold pretplatnik');
   window.location.href='?p=main';
  </script>");
        }
    }
    else {
        echo ("<script >
  window.alert('Morate biti ulogovani');
   window.location.href='?p=login';
  </script>");
    }

?>