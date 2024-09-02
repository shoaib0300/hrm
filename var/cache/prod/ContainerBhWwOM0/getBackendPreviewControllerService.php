<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBackendPreviewControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\BackendPreviewController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\BackendPreviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendPreviewController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/LoginLink/LoginLinkHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/LoginLink/FirewallAwareLoginLinkHandler.php';

        return $container->services['Contao\\CoreBundle\\Controller\\BackendPreviewController'] = new \Contao\CoreBundle\Controller\BackendPreviewController('/preview.php', ($container->services['contao.security.frontend_preview_authenticator'] ?? $container->load('getContao_Security_FrontendPreviewAuthenticatorService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['security.helper'] ?? self::getSecurity_HelperService($container)), new \Symfony\Bundle\SecurityBundle\LoginLink\FirewallAwareLoginLinkHandler(($container->services['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container)), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contao_backend' => ['privates', 'security.authenticator.login_link_handler.contao_backend', 'getSecurity_Authenticator_LoginLinkHandler_ContaoBackendService', true],
        ], [
            'contao_backend' => 'Symfony\\Component\\Security\\Http\\LoginLink\\LoginLinkHandler',
        ]), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['uri_signer'] ??= new \Symfony\Component\HttpFoundation\UriSigner($container->getEnv('APP_SECRET'))));
    }
}
