<?php

/*
 * This file is part of the FOSHttpCache package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\HttpCache\Test\PHPUnit;

use PHPUnit\Framework\Constraint\Constraint;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractCacheConstraint extends Constraint
{
    public function __construct(
        protected string $header = 'X-Cache',
    ) {
    }

    public function matches($other): bool
    {
        if (!$other instanceof ResponseInterface) {
            throw new \InvalidArgumentException('compare must compare with '.ResponseInterface::class.' got '.get_debug_type($other));
        }
        if (!$other->hasHeader($this->header)) {
            $message = sprintf(
                'Response has no "%s" header. Configure your caching proxy '
                .'to set the header with cache hit/miss status.',
                $this->header
            );
            if (200 !== $other->getStatusCode()) {
                $message .= sprintf("\nStatus code of response is %s.", $other->getStatusCode());
            }

            $message .= "\nThe response headers are:\n\n";

            foreach ($other->getHeaders() as $name => $values) {
                foreach ($values as $value) {
                    $message .= $name.': '.$value."\n";
                }
            }

            $body = $other->getBody();
            $body->rewind();
            $message .= sprintf("\nThe response body is:\n\n %s", $body->getContents());

            throw new \RuntimeException($message);
        }

        return str_contains($other->getHeaderLine($this->header), $this->getValue());
    }

    public function failureDescription($other): string
    {
        return sprintf(
            'response (with status code %s) %s',
            $other->getStatusCode(),
            $this->toString()
        );
    }
}
