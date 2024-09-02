<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Twig_FragmentRuntimeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.twig.fragment_runtime' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Runtime\FragmentRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Runtime/FragmentRuntime.php';

        return $container->privates['contao.twig.fragment_runtime'] = new \Contao\CoreBundle\Twig\Runtime\FragmentRuntime(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}
