<?php

namespace ContainerTK8SZmd;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Condition/TrustedDeviceCondition.php';

class TrustedDeviceConditionGhostBb85a42 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TrustedDeviceCondition implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'extendTrustedToken' => [parent::class, 'extendTrustedToken', null],
        "\0".parent::class."\0".'trustedDeviceManager' => [parent::class, 'trustedDeviceManager', null],
        'extendTrustedToken' => [parent::class, 'extendTrustedToken', null],
        'trustedDeviceManager' => [parent::class, 'trustedDeviceManager', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedDeviceConditionGhostBb85a42', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedDeviceConditionGhostBb85a42', 'TrustedDeviceConditionGhostBb85a42', false);
}
