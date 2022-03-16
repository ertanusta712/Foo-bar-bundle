<?php

namespace FooBar\Service;

class FooBarConfigService
{
    private $foo;
    private $bar;

    public function __construct($foo, $bar)
    {

        $this->foo = $foo;
        $this->bar = $bar;
    }

    public function dump(){
        dd($this->foo,$this->bar,self::class);
    }
}