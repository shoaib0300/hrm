<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Listener_SitemapService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_calendar.listener.sitemap' shared service.
     *
     * @return \Contao\CalendarBundle\EventListener\SitemapListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/EventListener/SitemapListener.php';

        $a = ($container->services['security.helper'] ?? self::getSecurity_HelperService($container));

        if (isset($container->privates['contao_calendar.listener.sitemap'])) {
            return $container->privates['contao_calendar.listener.sitemap'];
        }
        $b = ($container->services['contao.routing.content_url_generator'] ?? self::getContao_Routing_ContentUrlGeneratorService($container));

        if (isset($container->privates['contao_calendar.listener.sitemap'])) {
            return $container->privates['contao_calendar.listener.sitemap'];
        }

        return $container->privates['contao_calendar.listener.sitemap'] = new \Contao\CalendarBundle\EventListener\SitemapListener(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), $a, $b);
    }
}
