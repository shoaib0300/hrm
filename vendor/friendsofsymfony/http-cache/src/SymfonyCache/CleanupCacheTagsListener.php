<?php

/*
 * This file is part of the FOSHttpCache package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\HttpCache\SymfonyCache;

use FOS\HttpCache\TagHeaderFormatter\TagHeaderFormatter;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener to remove the cache tags header before the response
 * is delivered to the client so it's not exposed to the world.
 *
 * @author Yanick Witschi <yanick.witschi@terminal42.ch>
 */
class CleanupCacheTagsListener implements EventSubscriberInterface
{
    public function __construct(
        /**
         * The header name for setting cache tags.
         */
        private readonly string $tagsHeader = TagHeaderFormatter::DEFAULT_HEADER_NAME,
    ) {
    }

    public function removeTagsHeader(CacheEvent $e): void
    {
        if (null === $response = $e->getResponse()) {
            return;
        }

        $response->headers->remove($this->tagsHeader);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            Events::POST_HANDLE => 'removeTagsHeader',
        ];
    }
}
