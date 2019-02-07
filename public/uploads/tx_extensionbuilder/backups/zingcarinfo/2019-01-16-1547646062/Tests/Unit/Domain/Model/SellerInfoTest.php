<?php
namespace Zingcarinfo\Zingcarinfo\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SellerInfoTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSellerIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSellerId()
        );
    }

    /**
     * @test
     */
    public function setSellerIdForIntSetsSellerId()
    {
        $this->subject->setSellerId(12);

        self::assertAttributeEquals(
            12,
            'sellerId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSellerNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSellerName()
        );
    }

    /**
     * @test
     */
    public function setSellerNameForStringSetsSellerName()
    {
        $this->subject->setSellerName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sellerName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSellerContactReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSellerContact()
        );
    }

    /**
     * @test
     */
    public function setSellerContactForStringSetsSellerContact()
    {
        $this->subject->setSellerContact('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sellerContact',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCarIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCarId()
        );
    }

    /**
     * @test
     */
    public function setCarIdForIntSetsCarId()
    {
        $this->subject->setCarId(12);

        self::assertAttributeEquals(
            12,
            'carId',
            $this->subject
        );
    }
}
