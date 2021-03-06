<?php

namespace Gloomy\PagerBundle\DependencyInjection\ContainerBuilder;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;

class SerializerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->has('jms_serializer')) {
            $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../../Resources/config'));
            $loader->load('serializer.xml');
        }
    }
}