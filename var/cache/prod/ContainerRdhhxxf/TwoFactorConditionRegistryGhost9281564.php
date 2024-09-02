<?php

namespace ContainerRdhhxxf;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionRegistry.php';
class TwoFactorConditionRegistryGhost9281564 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TwoFactorConditionRegistry implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'conditions' => [parent::class, 'conditions', null],
        'conditions' => [parent::class, 'conditions', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TwoFactorConditionRegistryGhost9281564', false)) {
    \class_alias(__NAMESPACE__.'\\TwoFactorConditionRegistryGhost9281564', 'TwoFactorConditionRegistryGhost9281564', false);
}
