<?php
    
namespace Acme\Code;
    
class User
{
    /**
     * Main user class
     *
     * @param string|name
     * @return return void
     */

    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
