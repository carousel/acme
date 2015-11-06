<?php

require __DIR__ . '../../vendor/autoload.php';

use Acme\Code\User;

$user = new User('Some user');    
echo $user->name;
