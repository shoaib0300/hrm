<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_LoginLink_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.login_link.contao_backend' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\LoginLinkAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/LoginLinkAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';

        $a = ($container->privates['security.authenticator.login_link_handler.contao_backend'] ?? $container->load('getSecurity_Authenticator_LoginLinkHandler_ContaoBackendService'));

        if (isset($container->privates['security.authenticator.login_link.contao_backend'])) {
            return $container->privates['security.authenticator.login_link.contao_backend'];
        }
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.authenticator.login_link.contao_backend'])) {
            return $container->privates['security.authenticator.login_link.contao_backend'];
        }
        $c = ($container->services['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container));

        if (isset($container->privates['security.authenticator.login_link.contao_backend'])) {
            return $container->privates['security.authenticator.login_link.contao_backend'];
        }
        $d = ($container->services['contao.routing.content_url_generator'] ?? self::getContao_Routing_ContentUrlGeneratorService($container));

        if (isset($container->privates['security.authenticator.login_link.contao_backend'])) {
            return $container->privates['security.authenticator.login_link.contao_backend'];
        }
        $e = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['security.authenticator.login_link.contao_backend'])) {
            return $container->privates['security.authenticator.login_link.contao_backend'];
        }
        $f = ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container));

        if (isset($container->privates['security.authenticator.login_link.contao_backend'])) {
            return $container->privates['security.authenticator.login_link.contao_backend'];
        }
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $b, [], $f);
        $g->setOptions(['login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.login_link.contao_backend'] = new \Symfony\Component\Security\Http\Authenticator\LoginLinkAuthenticator($a, $b, new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Contao\CoreBundle\Security\Authentication\AuthenticationSuccessHandler(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['contao.security.two_factor.trusted_device_manager'] ?? $container->load('getContao_Security_TwoFactor_TrustedDeviceManagerService')), $c, $d, ($container->services['uri_signer'] ??= new \Symfony\Component\HttpFoundation\UriSigner($container->getEnv('APP_SECRET'))), ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container))), ['always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false], 'contao_backend'), $g, ['check_route' => 'contao_backend_login_link', 'check_post_only' => false]);
    }
}
