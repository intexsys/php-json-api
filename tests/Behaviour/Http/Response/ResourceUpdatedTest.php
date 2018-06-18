<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 8/1/15
 * Time: 12:29 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\Api\JsonApi\Behaviour\Http\Response;

use NilPortugues\Api\JsonApi\Http\Response\ResourceUpdated;

class ResourceUpdatedTest extends \PHPUnit_Framework_TestCase
{
    public function testResponse()
    {
        $json = \json_encode([]);
        $response = new ResourceUpdated($json);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(['application/vnd.api+json'], $response->getHeader('Content-type'));
    }
}
