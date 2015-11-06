<?php

require __DIR__ . '../../vendor/autoload.php';

use Acme\Code\User;

$user = new User('PHP Code');    
require __DIR__ . '../../application/Views/index.html';
