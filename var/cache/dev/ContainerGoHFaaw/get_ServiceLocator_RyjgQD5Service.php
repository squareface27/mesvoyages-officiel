<?php

namespace ContainerGoHFaaw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RyjgQD5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ryjgQD5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ryjgQD5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contact' => ['privates', '.errored..service_locator.ryjgQD5.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.ryjgQD5": it references class "App\\Entity\\Contact" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'contact' => 'App\\Entity\\Contact',
            'mailer' => '?',
        ]);
    }
}
