<?php

namespace Demeyerthom\Maybe\Test;

use Demeyerthom\Maybe\Some;
use Demeyerthom\Maybe\Test\Utils\Object;
use PHPUnit\Framework\TestCase;

/**
 * Class ChainingTest
 */
class ChainingTest extends TestCase
{
    public function testFilledChain()
    {
        $object1 = new Object('test');
        $object2 = new Object($object1);
        $object3 = new Object($object2);

        /** @var Object $chain */
        $chain = new Some($object3);

        static::assertEquals('test', $chain->getProtected()->getProtected()->getProtected()->value());
    }

    public function testIncompleteChain()
    {
        $object = new Object(null);

        /** @var Object $chain */
        $chain = new Some($object);

        static::assertNull($chain->getProtected()->getProtected()->getProtected()->value());
    }
}