<?php

namespace ContainerRdhhxxf;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/AuthenticatedTokenCondition.php';
class AuthenticatedTokenConditionGhost046d6e2 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\AuthenticatedTokenCondition implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'supportedTokens' => [parent::class, 'supportedTokens', null],
        'supportedTokens' => [parent::class, 'supportedTokens', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('AuthenticatedTokenConditionGhost046d6e2', false)) {
    \class_alias(__NAMESPACE__.'\\AuthenticatedTokenConditionGhost046d6e2', 'AuthenticatedTokenConditionGhost046d6e2', false);
}
