<?php

namespace Schnittstabil\Sugared\Sami;

class SamiFactoryAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = $this->getObjectForTrait(SamiFactoryAwareTrait::class);
    }

    public function testDefaultShouldBeSamiFactory()
    {
        $this->assertInstanceOf(SamiFactory::class, $this->sut->getSamiFactory());
    }

    public function testDefaultShouldBeSettable()
    {
        $noop = function () {
        };
        $this->sut->setSamiFactory($noop);

        $this->assertSame($noop, $this->sut->getSamiFactory());
    }
}