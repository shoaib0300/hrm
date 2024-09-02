<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_TokenCreatedListener_TwoFactor_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.token_created_listener.two_factor.contao_backend' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationTokenListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Event/AuthenticationTokenListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/AuthenticationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/AuthenticationContextFactory.php';

        return $container->privates['security.authentication.token_created_listener.two_factor.contao_backend'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationTokenListener('contao_backend', ($container->privates['scheb_two_factor.condition_registry'] ?? $container->load('getSchebTwoFactor_ConditionRegistryService')), ($container->privates['scheb_two_factor.provider_initiator'] ?? $container->load('getSchebTwoFactor_ProviderInitiatorService')), ($container->privates['scheb_two_factor.authentication_context_factory'] ??= new \Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextFactory('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\AuthenticationContext')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
