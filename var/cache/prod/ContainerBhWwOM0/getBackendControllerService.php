<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBackendControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\BackendController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\BackendController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendController.php';

        $container->services['Contao\\CoreBundle\\Controller\\BackendController'] = $instance = new \Contao\CoreBundle\Controller\BackendController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contao.cache.entity_tags' => ['services', 'contao.cache.entity_tags', 'getContao_Cache_EntityTagsService', true],
            'contao.csrf.token_manager' => ['services', 'contao.csrf.token_manager', 'getContao_Csrf_TokenManagerService', false],
            'contao.framework' => ['services', 'contao.framework', 'getContao_FrameworkService', false],
            'contao.picker.builder' => ['services', 'contao.picker.builder', 'getContao_Picker_BuilderService', true],
            'contao.routing.content_url_generator' => ['services', 'contao.routing.content_url_generator', 'getContao_Routing_ContentUrlGeneratorService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'fos_http_cache.http.symfony_response_tagger' => ['services', 'fos_http_cache.http.symfony_response_tagger', 'getFosHttpCache_Http_SymfonyResponseTaggerService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
            'uri_signer' => ['services', 'uri_signer', 'getUriSignerService', false],
        ], [
            'contao.cache.entity_tags' => '?',
            'contao.csrf.token_manager' => 'Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager',
            'contao.framework' => '?',
            'contao.picker.builder' => '?',
            'contao.routing.content_url_generator' => '?',
            'event_dispatcher' => '?',
            'fos_http_cache.http.symfony_response_tagger' => '?',
            'http_kernel' => '?',
            'logger' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'twig' => '?',
            'uri_signer' => '?',
        ]))->withContext('Contao\\CoreBundle\\Controller\\BackendController', $container));

        return $instance;
    }
}
