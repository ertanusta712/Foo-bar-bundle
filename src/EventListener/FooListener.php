<?php

namespace FooBar\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use FooBar\Entity\FooEntity;

class FooListener
{
    public function postPersist(FooEntity $entity, LifecycleEventArgs $eventArgs)
    {
        dd(self::class . "::postpersist");
    }
}