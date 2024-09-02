<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_CronList_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.contao.command.cron_list.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.cron_list.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:cron:list', [], 'Lists all available cron jobs and their intervals.', false, #[\Closure(name: 'contao.command.cron_list', class: 'Contao\\CoreBundle\\Command\\CronListCommand')] fn (): \Contao\CoreBundle\Command\CronListCommand => ($container->privates['contao.command.cron_list'] ?? $container->load('getContao_Command_CronListService')));
    }
}
