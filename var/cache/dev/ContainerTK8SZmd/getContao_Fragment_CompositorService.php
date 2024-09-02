<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_CompositorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment.compositor' shared service.
     *
     * @return \Contao\CoreBundle\Fragment\FragmentCompositor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentCompositor.php';

        $container->services['contao.fragment.compositor'] = $instance = new \Contao\CoreBundle\Fragment\FragmentCompositor();

        $instance->add('contao.content_element.accordion', true);
        $instance->add('contao.content_element.code', false);
        $instance->add('contao.content_element.description_list', false);
        $instance->add('contao.content_element.download', false);
        $instance->add('contao.content_element.downloads', false);
        $instance->add('contao.content_element.element_group', true);
        $instance->add('contao.content_element.headline', false);
        $instance->add('contao.content_element.html', false);
        $instance->add('contao.content_element.hyperlink', false);
        $instance->add('contao.content_element.image', false);
        $instance->add('contao.content_element.gallery', false);
        $instance->add('contao.content_element.list', false);
        $instance->add('contao.content_element.markdown', false);
        $instance->add('contao.content_element.player', false);
        $instance->add('contao.content_element.swiper', true);
        $instance->add('contao.content_element.table', false);
        $instance->add('contao.content_element.template', false);
        $instance->add('contao.content_element.teaser', false);
        $instance->add('contao.content_element.text', false);
        $instance->add('contao.content_element.toplink', false);
        $instance->add('contao.content_element.unfiltered_html', false);
        $instance->add('contao.content_element.vimeo', false);
        $instance->add('contao.content_element.youtube', false);

        return $instance;
    }
}
