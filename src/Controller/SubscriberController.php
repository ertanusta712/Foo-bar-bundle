<?php

namespace FooBar\Controller;

use FooBar\Event\BarEvent;
use FooBar\Event\FooEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class SubscriberController extends AbstractController
{

    public function index(EventDispatcherInterface $eventDispatcher)
    {
        $eventDispatcher->dispatch((new BarEvent("aaa")), BarEvent::BAR_EVENT);
        dd("asdasd");
    }
}