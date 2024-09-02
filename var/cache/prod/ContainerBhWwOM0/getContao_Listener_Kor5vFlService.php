<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Kor5vFlService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.kor5vFl' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\GlobalsMapListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/GlobalsMapListener.php';

        return $container->services['contao.listener.kor5vFl'] = new \Contao\CoreBundle\EventListener\GlobalsMapListener(['FE_MOD' => ['miscellaneous' => ['feed_reader' => 'Contao\\ModuleProxy', 'root_page_dependent_modules' => 'Contao\\ModuleProxy', 'template' => 'Contao\\ModuleProxy', 'unfiltered_html' => 'Contao\\ModuleProxy'], 'user' => ['two_factor' => 'Contao\\ModuleProxy']]]);
    }
}
