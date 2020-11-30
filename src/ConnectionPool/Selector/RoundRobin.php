<?php
/**
 * Elastic Transport
 *
 * @link      https://github.com/elastic/elastic-transport-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types=1);

namespace Elastic\Transport\ConnectionPool\Selector;

use Elastic\Transport\ConnectionPool\Connection;

class RoundRobin implements SelectorInterface
{
    public function nextConnection(): ?Connection
    {
        $next = next($this->connections);
        if (false === $next) {
            return reset($this->connections);
        }
        return $next;
    }

    public function setConnections(array $connections): void
    {
        $this->connections = $connections;
    }

    public function getConnection(): ?Connection
    {
        $current = current($this->connections);
        return $current instanceof Connection ? $current : null;
    }
}