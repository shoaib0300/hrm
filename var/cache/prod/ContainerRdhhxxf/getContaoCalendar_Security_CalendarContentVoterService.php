<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Security_CalendarContentVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_calendar.security.calendar_content_voter' shared service.
     *
     * @return \Contao\CalendarBundle\Security\Voter\CalendarContentVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDataContainerVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDynamicPtableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/Security/Voter/CalendarContentVoter.php';

        $a = ($container->privates['security.access.decision_manager'] ?? self::getSecurity_Access_DecisionManagerService($container));

        if (isset($container->privates['contao_calendar.security.calendar_content_voter'])) {
            return $container->privates['contao_calendar.security.calendar_content_voter'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->privates['contao_calendar.security.calendar_content_voter'])) {
            return $container->privates['contao_calendar.security.calendar_content_voter'];
        }

        return $container->privates['contao_calendar.security.calendar_content_voter'] = new \Contao\CalendarBundle\Security\Voter\CalendarContentVoter($a, $b);
    }
}
