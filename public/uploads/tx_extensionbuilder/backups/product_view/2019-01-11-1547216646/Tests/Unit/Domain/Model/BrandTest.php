<?php
namespace Productview\ProductView\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class BrandTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Productview\ProductView\Domain\Model\Brand
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Productview\ProductView\Domain\Model\Brand();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBrandReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBrand()
        );
    }

    /**
     * @test
     */
    public function setBrandForStringSetsBrand()
    {
        $this->subject->setBrand('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'brand',
            $this->subject
        );
    }
}
