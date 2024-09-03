<?php

namespace Lupcom\ContaoMemberNewsfeedBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Lupcom\ContaoMemberNewsfeedBundle\ContaoMemberNewsfeedBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoMemberNewsfeedBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
