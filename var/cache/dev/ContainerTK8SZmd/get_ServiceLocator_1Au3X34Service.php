<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1Au3X34Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1Au3X34' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1Au3X34'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contao.cache.entity_tags' => ['services', 'contao.cache.entity_tags', 'getContao_Cache_EntityTagsService', true],
            'contao.csrf.token_manager' => ['services', 'contao.csrf.token_manager', 'getContao_Csrf_TokenManagerService', false],
            'contao.framework' => ['services', 'contao.framework', 'getContao_FrameworkService', false],
            'contao.insert_tag.parser' => ['services', 'contao.insert_tag.parser', 'getContao_InsertTag_ParserService', true],
            'contao.routing.content_url_generator' => ['services', 'contao.routing.content_url_generator', 'getContao_Routing_ContentUrlGeneratorService', false],
            'contao.routing.page_finder' => ['services', 'contao.routing.page_finder', 'getContao_Routing_PageFinderService', false],
            'contao.routing.scope_matcher' => ['services', 'contao.routing.scope_matcher', 'getContao_Routing_ScopeMatcherService', false],
            'contao.twig.filesystem_loader' => ['services', 'contao.twig.filesystem_loader', 'getContao_Twig_FilesystemLoaderService', false],
            'contao.twig.interop.context_factory' => ['services', 'contao.twig.interop.context_factory', 'getContao_Twig_Interop_ContextFactoryService', true],
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
        ], [
            'contao.cache.entity_tags' => '?',
            'contao.csrf.token_manager' => 'Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager',
            'contao.framework' => '?',
            'contao.insert_tag.parser' => '?',
            'contao.routing.content_url_generator' => '?',
            'contao.routing.page_finder' => '?',
            'contao.routing.scope_matcher' => '?',
            'contao.twig.filesystem_loader' => 'Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoader',
            'contao.twig.interop.context_factory' => 'Contao\\CoreBundle\\Twig\\Interop\\ContextFactory',
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
        ]);
    }
}
