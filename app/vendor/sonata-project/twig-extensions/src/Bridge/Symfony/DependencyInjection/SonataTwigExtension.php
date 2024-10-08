<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Twig\Bridge\Symfony\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
final class SonataTwigExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new PhpFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('flash.php');
        $loader->load('twig.php');

        $this->registerFlashTypes($container, $config);
        $container->setParameter('sonata.twig.form_type', $config['form_type']);
    }

    /**
     * Registers flash message types defined in configuration to flash manager.
     *
     * @param mixed[] $config
     */
    public function registerFlashTypes(ContainerBuilder $container, array $config): void
    {
        $mergedConfig = array_merge_recursive($config['flashmessage'], [
            'success' => ['types' => [
                'success',
                'sonata_flash_success',
                'sonata_user_success',
            ]],
            'warning' => ['types' => [
                'warning',
                'sonata_flash_info',
            ]],
            'danger' => ['types' => [
                'error',
                'sonata_flash_error',
                'sonata_user_error',
            ]],
        ]);

        $types = $cssClasses = [];

        foreach ($mergedConfig as $typeKey => $typeConfig) {
            $types[$typeKey] = $typeConfig['types'];
            $cssClasses[$typeKey] = \array_key_exists('css_class', $typeConfig) ? $typeConfig['css_class'] : $typeKey;
        }

        $identifier = 'sonata.twig.flashmessage.manager';

        $definition = $container->getDefinition($identifier);
        $definition->replaceArgument(1, $types);
        $definition->replaceArgument(2, $cssClasses);

        $container->setDefinition($identifier, $definition);
    }
}
