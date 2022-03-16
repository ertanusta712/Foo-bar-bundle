<?php

namespace FooBar\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use FooBar\Entity\BarEntity;

class BarListener
{

    public function postPersist(BarEntity $entity, LifecycleEventArgs $eventArgs)
    {
        dd(self::class . "::postpersist");
    }
}