<?php 

function escondrijo($X){
    for ($i=2; $i <= $X ; $i+=2) { 
        echo $i ."</br>";
    }
}

echo escondrijo(20);

?>