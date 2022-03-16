<?php

namespace FooBar\Service;

class FooService implements ServiceInterface
{
        public function fooBar()
        {
            dd(self::class);
        }
}