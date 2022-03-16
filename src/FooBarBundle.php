<?php
namespace FooBar;


use FooBar\DepencyInjection\Compiler\FooBarCompilerPass;
use FooBar\DepencyInjection\FooBarExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FooBarBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->registerExtension(new FooBarExtension());
        $container->addCompilerPass(new FooBarCompilerPass());
    }
}