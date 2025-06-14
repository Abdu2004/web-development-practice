<?php

//$fruit=['apple','grape','orange'];

$fruit[]='lemon';
array_push($fruit,'apple','grape','orange');
array_unshift($fruit,'mango');
array_shift($fruit);
print_r($fruit);
?>