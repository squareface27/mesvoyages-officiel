<?php

namespace ContainerRtPsUkB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Command_MappingDebugClassService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.command.mapping_debug_class' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugClassCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MappingDebugClassCommand.php';

        $container->privates['vich_uploader.command.mapping_debug_class'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugClassCommand(($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:debug-class');

        return $instance;
    }
}
