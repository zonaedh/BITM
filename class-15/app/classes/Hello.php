<?php

namespace App\classes;

class Hello {
    public $message;

    public function __construct ()
    {
        $this->message = $message;
    }

    public function index () 
    {
        echo $this->message;
    }
}