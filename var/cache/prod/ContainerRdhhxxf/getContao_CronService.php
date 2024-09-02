<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_CronService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.cron' shared service.
     *
     * @return \Contao\CoreBundle\Cron\Cron
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/Cron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/CronJob.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/SuperviseWorkersCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/PurgeExpiredAltchaChallengesCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/PurgeExpiredDataCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/PurgeOptInTokensCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/PurgePreviewLinksCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/PurgeRegistrationsCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cron/PurgeTempFolderCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/Cron/GenerateFeedsCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/newsletter-bundle/src/Cron/PurgeSubscriptionsCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/comments-bundle/src/Cron/PurgeSubscriptionsCron.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Util/ProcessUtil.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $container->services['contao.cron'] = $instance = new \Contao\CoreBundle\Cron\Cron(#[\Closure(name: 'contao.repository.cron_job', class: 'Contao\\CoreBundle\\Repository\\CronJobRepository')] fn () => ($container->privates['contao.repository.cron_job'] ?? $container->load('getContao_Repository_CronJobService')), #[\Closure(name: 'doctrine.orm.default_entity_manager', class: 'Doctrine\\ORM\\EntityManager')] fn () => ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->services['cache.app'] ?? $container->load('getCache_AppService')), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        $a = ($container->services['contao.framework'] ?? self::getContao_FrameworkService($container));
        $b = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));
        $c = ($container->services['monolog.logger.contao.cron'] ?? $container->load('getMonolog_Logger_Contao_CronService'));

        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob($instance, '* * * * *', 'updateMinutelyCliCron'));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\SuperviseWorkersCron(($container->privates['contao.process_util'] ??= new \Contao\CoreBundle\Util\ProcessUtil((\dirname(__DIR__, 4).'/bin/console')))), '* * * * *', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\PurgeExpiredAltchaChallengesCron(($container->privates['contao.repository.altcha'] ?? $container->load('getContao_Repository_AltchaService'))), '@hourly', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\PurgeExpiredDataCron($a, $b), '@hourly', 'onHourly'));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\PurgeOptInTokensCron(($container->services['contao.opt_in'] ?? $container->load('getContao_OptInService')), $c), '@daily', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\PurgePreviewLinksCron($b), '@daily', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\PurgeRegistrationsCron($a, $c), '@daily', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CoreBundle\Cron\PurgeTempFolderCron(($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), \dirname(__DIR__, 4), $c), '@daily', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CalendarBundle\Cron\GenerateFeedsCron($a), '@daily', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\NewsletterBundle\Cron\PurgeSubscriptionsCron($a, $c), '@daily', NULL));
        $instance->addCronJob(new \Contao\CoreBundle\Cron\CronJob(new \Contao\CommentsBundle\Cron\PurgeSubscriptionsCron($a, $c), '@daily', NULL));

        return $instance;
    }
}
