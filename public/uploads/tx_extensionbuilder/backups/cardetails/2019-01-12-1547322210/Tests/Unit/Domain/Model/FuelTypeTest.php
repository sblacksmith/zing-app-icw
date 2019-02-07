<?php
namespace Cars\Cardetails\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class FuelTypeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Domain\Model\FuelType
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cars\Cardetails\Domain\Model\FuelType();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getFId()
        );
    }

    /**
     * @test
     */
    public function setFIdForIntSetsFId()
    {
        $this->subject->setFId(12);

        self::assertAttributeEquals(
            12,
            'fId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFuelTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFuelType()
        );
    }

    /**
     * @test
     */
    public function setFuelTypeForStringSetsFuelType()
    {
        $this->subject->setFuelType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fuelType',
            $this->subject
        );
    }
}
