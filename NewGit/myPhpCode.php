<?php

// selecting and print random caolor by array_read()
$colors = ['#FF0000', ' #008000', '#0000FF'];
echo $colors[array_rand($colors)] . PHP_EOL;