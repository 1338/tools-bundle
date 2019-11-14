<?php

namespace Cornerstones\ToolsBundle\DependencyInjection;

use Cornerstones\ToolsBundle\Command\TestCommand;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Definition;

class ToolsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        $commandDefine = (new Definition(
            TestCommand::class
        ))->setPublic(true);
        $container->setDefinition('cornerstones.command_test', $commandDefine);
    }
    public function getAlias()
    {
        return 'doctrine_cache';
    }
}
