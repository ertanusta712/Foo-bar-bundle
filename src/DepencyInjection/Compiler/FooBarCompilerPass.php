<?php

namespace FooBar\DepencyInjection\Compiler;

use FooBar\EventSubscriber\FooBarSubscriber;
use FooBar\Service\FooDispatcherService;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

class FooBarCompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        // temelde başka hizmet kapsayıcılarını değiştirmeye izin verir
        // fakat kendimizde hizmet tanımlayabiliriz.
        //https://symfony.com/doc/current/service_container/compiler_passes.html#working-with-compiler-passes-in-bundles
        $definition = new Definition(FooBarSubscriber::class);
        $container->setDefinition('foo_event_subscriber',$definition)
            ->setPublic(true)
            ->addTag('kernel.event_subscriber');

        $fooDispatcherServiceDefinition = $container->getDefinition('debug.event_dispatcher');
        $fooDispatcherServiceDefinition->setClass(FooDispatcherService::class);
    }
}