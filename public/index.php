<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

use HelloWorld\SayHello;

$hello = new Hello();

$helloWorld = new SayHello();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>5.2 Composer 2 - Package Management</title>
    </head>
    <body>
        <?php echo $hello->talk() . '<br>'; ?>  
        <?php echo $helloWorld->world() . '<br>'; ?>  

    </body>
</html>