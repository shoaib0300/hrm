<?php

namespace ContainerTK8SZmd;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionRegistry.php';

class TwoFactorConditionRegistryGhost45a79ab extends \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TwoFactorConditionRegistry implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'conditions' => [parent::class, 'conditions', null],
        'conditions' => [parent::class, 'conditions', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TwoFactorConditionRegistryGhost45a79ab', false)) {
    \class_alias(__NAMESPACE__.'\\TwoFactorConditionRegistryGhost45a79ab', 'TwoFactorConditionRegistryGhost45a79ab', false);
}
