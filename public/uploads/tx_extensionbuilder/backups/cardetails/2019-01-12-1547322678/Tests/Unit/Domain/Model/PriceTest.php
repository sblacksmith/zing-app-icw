<?php
namespace Cars\Cardetails\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class PriceTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Domain\Model\Price
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cars\Cardetails\Domain\Model\Price();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPId()
        );
    }

    /**
     * @test
     */
    public function setPIdForIntSetsPId()
    {
        $this->subject->setPId(12);

        self::assertAttributeEquals(
            12,
            'pId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }
}
