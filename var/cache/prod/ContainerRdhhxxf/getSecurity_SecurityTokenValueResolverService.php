<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_SecurityTokenValueResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.security_token_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/SecurityTokenValueResolver.php';

        return $container->privates['security.security_token_value_resolver'] = new \Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver(($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)));
    }
}
