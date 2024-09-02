<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNewsletter_Listener_MemberActivationMailService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_newsletter.listener.member_activation_mail' shared service.
     *
     * @return \Contao\NewsletterBundle\EventListener\MemberActivationMailListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/newsletter-bundle/src/EventListener/MemberActivationMailListener.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->privates['contao_newsletter.listener.member_activation_mail'])) {
            return $container->privates['contao_newsletter.listener.member_activation_mail'];
        }

        return $container->privates['contao_newsletter.listener.member_activation_mail'] = new \Contao\NewsletterBundle\EventListener\MemberActivationMailListener($a);
    }
}
