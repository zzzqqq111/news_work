<?php
function e($params){
   if(is_array($params)){
       echo "<pre>";
       var_dump($params);
       echo "</pre>";
   }elseif(is_string($params)){
       echo $params;
   }
}