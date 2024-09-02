<?php

namespace ContainerTK8SZmd;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedCookieResponseListener.php';

class TrustedCookieResponseListenerGhost2528a3a extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cookieDomain' => [parent::class, 'cookieDomain', null],
        "\0".parent::class."\0".'cookieName' => [parent::class, 'cookieName', null],
        "\0".parent::class."\0".'cookiePath' => [parent::class, 'cookiePath', null],
        "\0".parent::class."\0".'cookieSameSite' => [parent::class, 'cookieSameSite', null],
        "\0".parent::class."\0".'cookieSecure' => [parent::class, 'cookieSecure', null],
        "\0".parent::class."\0".'trustedTokenLifetime' => [parent::class, 'trustedTokenLifetime', null],
        "\0".parent::class."\0".'trustedTokenStorage' => [parent::class, 'trustedTokenStorage', null],
        'cookieDomain' => [parent::class, 'cookieDomain', null],
        'cookieName' => [parent::class, 'cookieName', null],
        'cookiePath' => [parent::class, 'cookiePath', null],
        'cookieSameSite' => [parent::class, 'cookieSameSite', null],
        'cookieSecure' => [parent::class, 'cookieSecure', null],
        'trustedTokenLifetime' => [parent::class, 'trustedTokenLifetime', null],
        'trustedTokenStorage' => [parent::class, 'trustedTokenStorage', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedCookieResponseListenerGhost2528a3a', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedCookieResponseListenerGhost2528a3a', 'TrustedCookieResponseListenerGhost2528a3a', false);
}
