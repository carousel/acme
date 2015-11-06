<?php

require __DIR__ . '../../vendor/autoload.php';

use Acme\Code\User;

class AcmeTest extends PHPUnit_Framework_TestCase 
{
    /** @test */
    public function acmeUserTest()
    {
        $user = new User('Miro');
        $this->assertEquals($user->name,'Miro');
    }
}
