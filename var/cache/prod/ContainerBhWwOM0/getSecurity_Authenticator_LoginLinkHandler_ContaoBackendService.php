<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_LoginLinkHandler_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.login_link_handler.contao_backend' shared service.
     *
     * @return \Symfony\Component\Security\Http\LoginLink\LoginLinkHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/LoginLink/LoginLinkHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/LoginLink/LoginLinkHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Signature/SignatureHasher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyReadInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyWriteInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/ConstructorArgumentTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/ReflectionExtractor.php';

        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['security.authenticator.login_link_handler.contao_backend'])) {
            return $container->privates['security.authenticator.login_link_handler.contao_backend'];
        }
        $b = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor();

        return $container->privates['security.authenticator.login_link_handler.contao_backend'] = new \Symfony\Component\Security\Http\LoginLink\LoginLinkHandler($a, ($container->privates['contao.security.backend_user_provider'] ?? $container->load('getContao_Security_BackendUserProviderService')), new \Symfony\Component\Security\Core\Signature\SignatureHasher(new \Symfony\Component\PropertyAccess\PropertyAccessor(3, 2, ($container->privates['cache.property_access'] ?? $container->load('getCache_PropertyAccessService')), $b, $b), ['username', 'lastLogin'], $container->getEnv('APP_SECRET'), NULL, NULL), ['route_name' => 'contao_backend_login_link', 'lifetime' => 600]);
    }
}
