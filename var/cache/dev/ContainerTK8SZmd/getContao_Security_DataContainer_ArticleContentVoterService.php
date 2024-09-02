<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_DataContainer_ArticleContentVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.security.data_container.article_content_voter' shared service.
     *
     * @return \Contao\CoreBundle\Security\Voter\DataContainer\ArticleContentVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDataContainerVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDynamicPtableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/ArticleContentVoter.php';

        $a = ($container->privates['debug.security.access.decision_manager'] ?? self::getDebug_Security_Access_DecisionManagerService($container));

        if (isset($container->privates['contao.security.data_container.article_content_voter'])) {
            return $container->privates['contao.security.data_container.article_content_voter'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->privates['contao.security.data_container.article_content_voter'])) {
            return $container->privates['contao.security.data_container.article_content_voter'];
        }

        return $container->privates['contao.security.data_container.article_content_voter'] = new \Contao\CoreBundle\Security\Voter\DataContainer\ArticleContentVoter($a, $b);
    }
}
