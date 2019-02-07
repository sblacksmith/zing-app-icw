<?php
namespace SearchCars\Search\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CarDeatailsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SearchCars\Search\Domain\Model\CarDeatails
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SearchCars\Search\Domain\Model\CarDeatails();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFuelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFuel()
        );
    }

    /**
     * @test
     */
    public function setFuelForStringSetsFuel()
    {
        $this->subject->setFuel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fuel',
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
    public function getPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForIntSetsPrice()
    {
        $this->subject->setPrice(12);

        self::assertAttributeEquals(
            12,
            'price',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMilesReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMiles()
        );
    }

    /**
     * @test
     */
    public function setMilesForFloatSetsMiles()
    {
        $this->subject->setMiles(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'miles',
            $this->subject,
            '',
            0.000000001
        );
    }
}
