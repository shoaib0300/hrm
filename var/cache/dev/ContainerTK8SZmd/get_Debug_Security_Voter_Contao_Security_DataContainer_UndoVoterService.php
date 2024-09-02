<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_Security_Voter_Contao_Security_DataContainer_UndoVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.debug.security.voter.contao.security.data_container.undo_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDataContainerVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/UndoVoter.php';

        $a = ($container->privates['debug.security.access.decision_manager'] ?? self::getDebug_Security_Access_DecisionManagerService($container));

        if (isset($container->privates['.debug.security.voter.contao.security.data_container.undo_voter'])) {
            return $container->privates['.debug.security.voter.contao.security.data_container.undo_voter'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['.debug.security.voter.contao.security.data_container.undo_voter'])) {
            return $container->privates['.debug.security.voter.contao.security.data_container.undo_voter'];
        }

        return $container->privates['.debug.security.voter.contao.security.data_container.undo_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Contao\CoreBundle\Security\Voter\DataContainer\UndoVoter($a), $b);
    }
}
