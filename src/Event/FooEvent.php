<?php

namespace FooBar\Event;

class FooEvent
{
    public const FOO_EVENT = "foobar.foo";
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return mixed
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param mixed $foo
     */
    public function setFoo($foo): void
    {
        $this->foo = $foo;
    }
}