<?php

namespace ContainerTK8SZmd;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedDeviceTokenStorage.php';

class TrustedDeviceTokenStorageGhostE7836e7 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage implements \Symfony\Component\VarExporter\LazyObjectInterface
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

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedDeviceTokenStorageGhostE7836e7', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedDeviceTokenStorageGhostE7836e7', 'TrustedDeviceTokenStorageGhostE7836e7', false);
}
