<?php

namespace Jotaeme\AemetBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('aemet');
        $rootNode
            ->children()
                ->scalarNode('apikey')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}