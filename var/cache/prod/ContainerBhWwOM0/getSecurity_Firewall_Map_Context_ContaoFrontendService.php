<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ContaoFrontendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.contao_frontend' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authorization/AccessDeniedHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/AccessDeniedHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $b = ($container->privates['contao.security.login_authenticator.contao_frontend'] ?? $container->load('getContao_Security_LoginAuthenticator_ContaoFrontendService'));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $c = ($container->services['contao.routing.page_finder'] ?? self::getContao_Routing_PageFinderService($container));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $d = ($container->services['contao.routing.page_registry'] ?? self::getContao_Routing_PageRegistryService($container));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $e = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $f = ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $g = ($container->privates['security.event_dispatcher.contao_frontend'] ?? self::getSecurity_EventDispatcher_ContaoFrontendService($container));

        if (isset($container->privates['security.firewall.map.context.contao_frontend'])) {
            return $container->privates['security.firewall.map.context.contao_frontend'];
        }
        $h = ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));

        return $container->privates['security.firewall.map.context.contao_frontend'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.1'] ?? self::getSecurity_ContextListener_1Service($container));
            yield 2 => ($container->privates['security.firewall.authenticator.contao_frontend'] ?? $container->load('getSecurity_Firewall_Authenticator_ContaoFrontendService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($h, ($container->services['security.authentication.trust_resolver'] ?? self::getSecurity_Authentication_TrustResolverService($container)), $a, 'contao_frontend', $b, NULL, new \Contao\CoreBundle\Security\Authentication\AccessDeniedHandler($c, $d, $e), $f, false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($h, $a, $g, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'contao_frontend_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('contao_frontend', 'contao.security.user_checker', 'contao.routing.frontend_matcher', true, false, 'contao.security.frontend_user_provider', 'contao_frontend', 'contao.security.login_authenticator.contao_frontend', 'contao.security.access_denied_handler', NULL, ['login_throttling', 'contao_login', 'remember_me'], NULL, ['path' => 'contao_frontend_logout', 'enable_csrf' => NULL, 'csrf_token_id' => 'logout', 'csrf_parameter' => '_csrf_token', 'target' => '/', 'invalidate_session' => true, 'clear_site_data' => [], 'delete_cookies' => []]));
    }
}
