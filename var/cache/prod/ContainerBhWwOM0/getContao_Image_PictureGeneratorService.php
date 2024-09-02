<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_PictureGeneratorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.image.picture_generator' shared service.
     *
     * @return \Contao\Image\PictureGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/PictureGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/PictureGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/ResizeCalculator.php';

        return $container->services['contao.image.picture_generator'] = new \Contao\Image\PictureGenerator(($container->services['contao.image.resizer'] ?? $container->load('getContao_Image_ResizerService')), ($container->privates['contao.image.resize_calculator'] ??= new \Contao\Image\ResizeCalculator()));
    }
}
