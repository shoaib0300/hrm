<?php

namespace ContainerBhWwOM0;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderInitiator.php';
class TwoFactorProviderInitiatorGhostB7520f6 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderInitiator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'providerRegistry' => [parent::class, 'providerRegistry', null],
        "\0".parent::class."\0".'twoFactorTokenFactory' => [parent::class, 'twoFactorTokenFactory', null],
        'providerRegistry' => [parent::class, 'providerRegistry', null],
        'twoFactorTokenFactory' => [parent::class, 'twoFactorTokenFactory', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TwoFactorProviderInitiatorGhostB7520f6', false)) {
    \class_alias(__NAMESPACE__.'\\TwoFactorProviderInitiatorGhostB7520f6', 'TwoFactorProviderInitiatorGhostB7520f6', false);
}
