<?php

namespace Cornerstones\ToolsBundle\DependencyInjection;

class CornerstonesToolsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
    public function getAlias()
    {
        return 'cornerstones_tools';
    }
}
