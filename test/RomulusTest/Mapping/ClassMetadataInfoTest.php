<?php

namespace Klever\RomulusTest\Mapping;

use Klever\Romulus\Mapping\ClassMetadataInfo;
use Klever\RomulusTest\TestAsset\SimpleModel;

class ClassMetadataInfoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ClassMetadataInfo $classMetadataInfo
     */
    private $classMetadataInfo;

    protected function setUp()
    {
        $this->classMetadataInfo = new ClassMetadataInfo(SimpleModel::class);
    }

    public function testCanProvideNewInstance()
    {
        $instance = $this->classMetadataInfo->newInstance();
        $this->assertInstanceOf(SimpleModel::class, $instance);
    }
}
