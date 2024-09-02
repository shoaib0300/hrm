<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_TrustedDeviceConditionService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'scheb_two_factor.trusted_device_condition' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TrustedDeviceCondition
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['scheb_two_factor.trusted_device_condition'] = $container->createProxy('TrustedDeviceConditionGhost9f6d40c', static fn () => \TrustedDeviceConditionGhost9f6d40c::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Condition/TrustedDeviceCondition.php';

        return ($lazyLoad->__construct(($container->services['contao.security.two_factor.trusted_device_manager'] ?? $container->load('getContao_Security_TwoFactor_TrustedDeviceManagerService')), false) && false ?: $lazyLoad);
    }
}
