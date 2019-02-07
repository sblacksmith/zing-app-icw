<?php
namespace Productview\ProductView\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ProductTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Productview\ProductView\Domain\Model\Product
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Productview\ProductView\Domain\Model\Product();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBrandsReturnsInitialValueForBrand()
    {
        self::assertEquals(
            null,
            $this->subject->getBrands()
        );
    }

    /**
     * @test
     */
    public function setBrandsForBrandSetsBrands()
    {
        $brandsFixture = new \Productview\ProductView\Domain\Model\Brand();
        $this->subject->setBrands($brandsFixture);

        self::assertAttributeEquals(
            $brandsFixture,
            'brands',
            $this->subject
        );
    }
}
