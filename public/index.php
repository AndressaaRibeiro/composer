<?php

namespace App;

use App\Hello;

require  '/../src/Hello.php';

$message = new Hello();
echo $message->talk();

?>