<?php

namespace FooBar\Event;

class BarEvent
{
    public const BAR_EVENT = "foobar.bar";
    private $bar;

    public function __construct($bar)
    {
        $this->bar = $bar;
    }

    /**
     * @return mixed
     */
    public function getBar()
    {
        return $this->bar;
    }
}