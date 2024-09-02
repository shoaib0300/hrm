<?php

namespace ContainerRdhhxxf;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/IpWhitelistCondition.php';
class IpWhitelistConditionGhost1a97d34 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\IpWhitelistCondition implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'ipWhitelistProvider' => [parent::class, 'ipWhitelistProvider', null],
        'ipWhitelistProvider' => [parent::class, 'ipWhitelistProvider', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('IpWhitelistConditionGhost1a97d34', false)) {
    \class_alias(__NAMESPACE__.'\\IpWhitelistConditionGhost1a97d34', 'IpWhitelistConditionGhost1a97d34', false);
}
