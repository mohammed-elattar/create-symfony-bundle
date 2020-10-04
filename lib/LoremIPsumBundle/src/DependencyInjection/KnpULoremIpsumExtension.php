<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class KnpULoremIpsumExtension extends Extension
{
    public function getAlias(): string
    {
        return 'knpu_lorem_ipsum';
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $container->getDefinition('knpu_lorem_ipsum.knpu_ipsum')
            ->setArgument(0, $config['unicorns_are_real'])
            ->setArgument(1, $config['min_sunshine'])
            ;
    }
}
