<?php

namespace FooBar\Service;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class FooDispatcherService implements EventDispatcherInterface
{

    public function addListener(string $eventName, callable $listener, int $priority = 0)
    {
        // TODO: Implement addListener() method.
    }

    public function addSubscriber(EventSubscriberInterface $subscriber)
    {
        // TODO: Implement addSubscriber() method.
    }

    public function removeListener(string $eventName, callable $listener)
    {
        // TODO: Implement removeListener() method.
    }

    public function removeSubscriber(EventSubscriberInterface $subscriber)
    {
        // TODO: Implement removeSubscriber() method.
    }

    public function getListeners(string $eventName = null): array
    {
        // TODO: Implement getListeners() method.
    }

    public function dispatch(object $event, string $eventName = null): object
    {
        // TODO: Implement dispatch() method.
    }

    public function getListenerPriority(string $eventName, callable $listener): ?int
    {
        // TODO: Implement getListenerPriority() method.
    }

    public function hasListeners(string $eventName = null): bool
    {
        // TODO: Implement hasListeners() method.
    }
}