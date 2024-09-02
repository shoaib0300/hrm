<?php

namespace ContainerRdhhxxf;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedDeviceTokenStorage.php';
class TrustedDeviceTokenStorageGhost09532b7 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cookieName' => [parent::class, 'cookieName', null],
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', null],
        "\0".parent::class."\0".'tokenGenerator' => [parent::class, 'tokenGenerator', null],
        "\0".parent::class."\0".'trustedTokenList' => [parent::class, 'trustedTokenList', null],
        "\0".parent::class."\0".'updateCookie' => [parent::class, 'updateCookie', null],
        'cookieName' => [parent::class, 'cookieName', null],
        'requestStack' => [parent::class, 'requestStack', null],
        'tokenGenerator' => [parent::class, 'tokenGenerator', null],
        'trustedTokenList' => [parent::class, 'trustedTokenList', null],
        'updateCookie' => [parent::class, 'updateCookie', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedDeviceTokenStorageGhost09532b7', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedDeviceTokenStorageGhost09532b7', 'TrustedDeviceTokenStorageGhost09532b7', false);
}
