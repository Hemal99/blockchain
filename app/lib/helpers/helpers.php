 <?php
 function dnd($data){
     echo '<pre>';
     var_dump($data);
     echo'<pre/>';
     die();
 }

 function santize($unsantizeVal){
   return htmlentities($unsantizeVal,ENT_QUOTES,'UTF-8');
 }