<?php
/**
 * Created by PhpStorm.
 * User: edd
 * Date: 2/4/18
 * Time: 11:15 AM
 */

namespace Eddmash\Bundle\PowerormBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class PowerormExtension extends Extension
{

    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('service.xml');

        if (class_exists(Application::class)) {
            $loader->load('console.xml');
        }

        $configuration = $this->getConfiguration($configs, $container);
//        $config = $this->processConfiguration($configuration, $configs);
    }
}