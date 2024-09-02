<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.fwb2A_j'] ?? self::get_ServiceLocator_Fwb2AJService($container)), ($container->privates['.service_locator.HKs32gM'] ?? $container->load('get_ServiceLocator_HKs32gMService')), ['contao_backend' => [($container->privates['contao.security.login_authenticator.contao_backend'] ?? $container->load('getContao_Security_LoginAuthenticator_ContaoBackendService')), ($container->privates['security.authenticator.login_link.contao_backend'] ?? $container->load('getSecurity_Authenticator_LoginLink_ContaoBackendService'))], 'contao_frontend' => [($container->privates['contao.security.login_authenticator.contao_frontend'] ?? $container->load('getContao_Security_LoginAuthenticator_ContaoFrontendService')), ($container->privates['security.authenticator.remember_me.contao_frontend'] ?? $container->load('getSecurity_Authenticator_RememberMe_ContaoFrontendService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
