<?php

namespace ContainerBhWwOM0;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedCookieResponseListener.php';
class TrustedCookieResponseListenerGhost4e97e67 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener implements \Symfony\Component\VarExporter\LazyObjectInterface
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
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedCookieResponseListenerGhost4e97e67', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedCookieResponseListenerGhost4e97e67', 'TrustedCookieResponseListenerGhost4e97e67', false);
}
