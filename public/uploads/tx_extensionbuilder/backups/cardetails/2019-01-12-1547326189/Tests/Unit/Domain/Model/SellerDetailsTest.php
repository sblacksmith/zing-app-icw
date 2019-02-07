<?php
namespace Cars\Cardetails\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SellerDetailsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Domain\Model\SellerDetails
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cars\Cardetails\Domain\Model\SellerDetails();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSId()
        );
    }

    /**
     * @test
     */
    public function setSIdForIntSetsSId()
    {
        $this->subject->setSId(12);

        self::assertAttributeEquals(
            12,
            'sId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSName()
        );
    }

    /**
     * @test
     */
    public function setSNameForStringSetsSName()
    {
        $this->subject->setSName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSContactReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSContact()
        );
    }

    /**
     * @test
     */
    public function setSContactForStringSetsSContact()
    {
        $this->subject->setSContact('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sContact',
            $this->subject
        );
    }
}
