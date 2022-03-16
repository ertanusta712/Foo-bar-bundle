<?php

namespace FooBar\DepencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('foo_bar');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('foo')->defaultNull()->end()
                ->scalarNode('bar')->defaultNull()->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}