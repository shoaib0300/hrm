<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_DataContainer_ContentElementNestingVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.security.data_container.content_element_nesting_voter' shared service.
     *
     * @return \Contao\CoreBundle\Security\Voter\DataContainer\ContentElementNestingVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDataContainerVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/ContentElementNestingVoter.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->privates['contao.security.data_container.content_element_nesting_voter'])) {
            return $container->privates['contao.security.data_container.content_element_nesting_voter'];
        }

        return $container->privates['contao.security.data_container.content_element_nesting_voter'] = new \Contao\CoreBundle\Security\Voter\DataContainer\ContentElementNestingVoter($a, ($container->services['contao.fragment.compositor'] ?? $container->load('getContao_Fragment_CompositorService')));
    }
}
