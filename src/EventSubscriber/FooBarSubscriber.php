<?php

namespace FooBar\EventSubscriber;

use FooBar\Event\BarEvent;
use FooBar\Event\FooEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class FooBarSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            FooEvent::FOO_EVENT => [
                ['fooTest', 100],
            ],
            BarEvent::BAR_EVENT => [
                ['barTest',100]
            ]

        ];
    }

    public function fooTest(FooEvent $event)
    {
        dd(self::class,$event);
    }

    public function barTest(BarEvent $event)
    {
        dd(self::class,$event);
    }
}