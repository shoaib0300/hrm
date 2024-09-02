<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (false) {
                yield 'doctrine.debug_data_holder' => null;
            }
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($container->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($container->privates['http_client.transport'])) {
                yield 'http_client.transport' => ($container->privates['http_client.transport'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->privates['translation.locale_switcher'])) {
                yield 'translation.locale_switcher' => ($container->privates['translation.locale_switcher'] ?? null);
            }
            if (isset($container->services['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->services['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['cache.rate_limiter'])) {
                yield 'cache.rate_limiter' => ($container->services['cache.rate_limiter'] ?? null);
            }
            if (isset($container->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($container->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->privates['messenger.transport.in_memory.factory'])) {
                yield 'messenger.transport.in_memory.factory' => ($container->privates['messenger.transport.in_memory.factory'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->services['security.token_storage'])) {
                yield 'security.token_storage' => ($container->services['security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->services['cache.security_is_granted_attribute_expression_language'])) {
                yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? null);
            }
            if (isset($container->privates['cache.security_token_verifier'])) {
                yield 'cache.security_token_verifier' => ($container->privates['cache.security_token_verifier'] ?? null);
            }
            if (isset($container->services['contao.listener.data_container.cte_alias'])) {
                yield 'contao.listener.data_container.cte_alias' => ($container->services['contao.listener.data_container.cte_alias'] ?? null);
            }
            if (isset($container->services['contao.listener.data_container.layout_options'])) {
                yield 'contao.listener.data_container.layout_options' => ($container->services['contao.listener.data_container.layout_options'] ?? null);
            }
            if (isset($container->privates['contao.listener.merge_http_headers'])) {
                yield 'contao.listener.merge_http_headers' => ($container->privates['contao.listener.merge_http_headers'] ?? null);
            }
            if (isset($container->privates['contao.listener.subrequest_cache'])) {
                yield 'contao.listener.subrequest_cache' => ($container->privates['contao.listener.subrequest_cache'] ?? null);
            }
            if (isset($container->services['contao.csrf.token_manager'])) {
                yield 'contao.csrf.token_manager' => ($container->services['contao.csrf.token_manager'] ?? null);
            }
            if (isset($container->privates['contao.csrf.token_storage'])) {
                yield 'contao.csrf.token_storage' => ($container->privates['contao.csrf.token_storage'] ?? null);
            }
            if (false) {
                yield 'contao.data_collector' => null;
            }
            if (isset($container->services['contao.framework'])) {
                yield 'contao.framework' => ($container->services['contao.framework'] ?? null);
            }
            if (isset($container->services['contao.image.sizes'])) {
                yield 'contao.image.sizes' => ($container->services['contao.image.sizes'] ?? null);
            }
            if (isset($container->services['contao.insert_tag.parser'])) {
                yield 'contao.insert_tag.parser' => ($container->services['contao.insert_tag.parser'] ?? null);
            }
            if (isset($container->privates['contao.monolog.handler'])) {
                yield 'contao.monolog.handler' => ($container->privates['contao.monolog.handler'] ?? null);
            }
            if (isset($container->privates['contao.process_util'])) {
                yield 'contao.process_util' => ($container->privates['contao.process_util'] ?? null);
            }
            if (isset($container->services['contao.routing.content_url_generator'])) {
                yield 'contao.routing.content_url_generator' => ($container->services['contao.routing.content_url_generator'] ?? null);
            }
            if (isset($container->services['contao.routing.page_registry'])) {
                yield 'contao.routing.page_registry' => ($container->services['contao.routing.page_registry'] ?? null);
            }
            if (isset($container->privates['contao.security.backend_access_voter'])) {
                yield 'contao.security.backend_access_voter' => ($container->privates['contao.security.backend_access_voter'] ?? null);
            }
            if (isset($container->privates['contao.security.data_container.article_content_voter'])) {
                yield 'contao.security.data_container.article_content_voter' => ($container->privates['contao.security.data_container.article_content_voter'] ?? null);
            }
            if (isset($container->privates['contao.security.data_container.content_element_nesting_voter'])) {
                yield 'contao.security.data_container.content_element_nesting_voter' => ($container->privates['contao.security.data_container.content_element_nesting_voter'] ?? null);
            }
            if (isset($container->privates['contao.security.data_container.page_permission_voter'])) {
                yield 'contao.security.data_container.page_permission_voter' => ($container->privates['contao.security.data_container.page_permission_voter'] ?? null);
            }
            if (isset($container->privates['contao.security.data_container.page_type_access_voter'])) {
                yield 'contao.security.data_container.page_type_access_voter' => ($container->privates['contao.security.data_container.page_type_access_voter'] ?? null);
            }
            if (isset($container->privates['contao.security.data_container.user_access_voter'])) {
                yield 'contao.security.data_container.user_access_voter' => ($container->privates['contao.security.data_container.user_access_voter'] ?? null);
            }
            if (false) {
                yield 'contao.translation.data_collector_translator' => null;
            }
            if (isset($container->services['contao.twig.filesystem_loader'])) {
                yield 'contao.twig.filesystem_loader' => ($container->services['contao.twig.filesystem_loader'] ?? null);
            }
            if (isset($container->privates['contao_news.security.news_content_voter'])) {
                yield 'contao_news.security.news_content_voter' => ($container->privates['contao_news.security.news_content_voter'] ?? null);
            }
            if (isset($container->privates['contao_calendar.security.calendar_content_voter'])) {
                yield 'contao_calendar.security.calendar_content_voter' => ($container->privates['contao_calendar.security.calendar_content_voter'] ?? null);
            }
            if (false) {
                yield 'contao.filesystem.dbafs.files' => null;
            }
        }, fn () => 0 + (int) (isset($container->services['doctrine'])) + (int) (false) + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($container->privates['cache.annotations'])) + (int) (false) + (int) (isset($container->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($container->privates['http_client.transport'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->privates['translation.locale_switcher'])) + (int) (isset($container->services['debug.stopwatch'])) + (int) (isset($container->services['cache.rate_limiter'])) + (int) (isset($container->privates['doctrine.result_cache_pool'])) + (int) (isset($container->privates['doctrine.system_cache_pool'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->privates['messenger.transport.in_memory.factory'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->services['security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->services['cache.security_is_granted_attribute_expression_language'])) + (int) (isset($container->privates['cache.security_token_verifier'])) + (int) (isset($container->services['contao.listener.data_container.cte_alias'])) + (int) (isset($container->services['contao.listener.data_container.layout_options'])) + (int) (isset($container->privates['contao.listener.merge_http_headers'])) + (int) (isset($container->privates['contao.listener.subrequest_cache'])) + (int) (isset($container->services['contao.csrf.token_manager'])) + (int) (isset($container->privates['contao.csrf.token_storage'])) + (int) (false) + (int) (isset($container->services['contao.framework'])) + (int) (isset($container->services['contao.image.sizes'])) + (int) (isset($container->services['contao.insert_tag.parser'])) + (int) (isset($container->privates['contao.monolog.handler'])) + (int) (isset($container->privates['contao.process_util'])) + (int) (isset($container->services['contao.routing.content_url_generator'])) + (int) (isset($container->services['contao.routing.page_registry'])) + (int) (isset($container->privates['contao.security.backend_access_voter'])) + (int) (isset($container->privates['contao.security.data_container.article_content_voter'])) + (int) (isset($container->privates['contao.security.data_container.content_element_nesting_voter'])) + (int) (isset($container->privates['contao.security.data_container.page_permission_voter'])) + (int) (isset($container->privates['contao.security.data_container.page_type_access_voter'])) + (int) (isset($container->privates['contao.security.data_container.user_access_voter'])) + (int) (false) + (int) (isset($container->services['contao.twig.filesystem_loader'])) + (int) (isset($container->privates['contao_news.security.news_content_voter'])) + (int) (isset($container->privates['contao_calendar.security.calendar_content_voter'])) + (int) (false)), ['doctrine' => ['reset'], 'doctrine.debug_data_holder' => ['reset'], 'cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.annotations' => ['reset'], 'cache.property_info' => ['reset'], 'cache.messenger.restart_workers_signal' => ['reset'], 'http_client.transport' => ['?reset'], 'mailer.message_logger_listener' => ['reset'], 'translation.locale_switcher' => ['reset'], 'debug.stopwatch' => ['reset'], 'cache.rate_limiter' => ['reset'], 'doctrine.result_cache_pool' => ['reset'], 'doctrine.system_cache_pool' => ['reset'], 'session_listener' => ['reset'], 'messenger.transport.in_memory.factory' => ['reset'], 'monolog.handler.main' => ['reset'], 'monolog.handler.console' => ['reset'], 'security.token_storage' => ['disableUsageTracking', 'setToken'], 'cache.security_expression_language' => ['reset'], 'cache.security_is_granted_attribute_expression_language' => ['reset'], 'cache.security_token_verifier' => ['reset'], 'contao.listener.data_container.cte_alias' => ['reset'], 'contao.listener.data_container.layout_options' => ['reset'], 'contao.listener.merge_http_headers' => ['reset'], 'contao.listener.subrequest_cache' => ['reset'], 'contao.csrf.token_manager' => ['reset'], 'contao.csrf.token_storage' => ['reset'], 'contao.data_collector' => ['reset'], 'contao.framework' => ['reset'], 'contao.image.sizes' => ['reset'], 'contao.insert_tag.parser' => ['reset'], 'contao.monolog.handler' => ['reset'], 'contao.process_util' => ['reset'], 'contao.routing.content_url_generator' => ['reset'], 'contao.routing.page_registry' => ['reset'], 'contao.security.backend_access_voter' => ['reset'], 'contao.security.data_container.article_content_voter' => ['reset'], 'contao.security.data_container.content_element_nesting_voter' => ['reset'], 'contao.security.data_container.page_permission_voter' => ['reset'], 'contao.security.data_container.page_type_access_voter' => ['reset'], 'contao.security.data_container.user_access_voter' => ['reset'], 'contao.translation.data_collector_translator' => ['reset'], 'contao.twig.filesystem_loader' => ['reset'], 'contao_news.security.news_content_voter' => ['reset'], 'contao_calendar.security.calendar_content_voter' => ['reset'], 'contao.filesystem.dbafs.files' => ['reset']]);
    }
}
