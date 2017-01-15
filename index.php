<meta charset="utf-8">
<?php

error_reporting(E_ALL);

      
      
function test(){
    static $z=0;
    $z++;
    
    echo $z. '<br>';
    
}
test();
test();
test();
test();

