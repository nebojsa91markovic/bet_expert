<?php

    if(isset($_SESSION['privilege'])){
        if ($_SESSION['privilege']==5 or $_SESSION['privilege']==1){
        }
        else {
            echo ("<script >
  window.alert('Morate postati Gold pretplatnik');
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