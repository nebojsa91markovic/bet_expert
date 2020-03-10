<?php

    if(isset($_SESSION['privilegije'])){
        if ($_SESSION['privilegije']<>1 || $_SESSION['privilegije']<>3){
            echo ("<script >
  window.alert('Nemate prava');
   window.location.href='?p=main';
  </script>");
        }
    }

?>