<?php

namespace FooBar\Service;

class BarService implements ServiceInterface
{
    public function fooBar()
    {
       dd(self::class);
    }
}