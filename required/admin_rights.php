<?php

    if(isset($_SESSION['privilegije'])){
        if ($_SESSION['privilegije']<>1){
            echo ("<script >
  window.alert('Nemate prava');
   window.location.href='?p=main';
  </script>");
        }
    }

?>