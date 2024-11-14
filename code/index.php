<?php
$a = 5;
$b = '05';

var_dump($a == $b); //true 7.4 - bool(true)

var_dump((int)'012345');//12345 7.4 - int(12345) 

var_dump((float)123.0 === (int)123.0); // false  7.4 - bool(false)


var_dump(0 == 'hello, world'); //false  7.4 -  bool(true)

phpinfo();

?>

