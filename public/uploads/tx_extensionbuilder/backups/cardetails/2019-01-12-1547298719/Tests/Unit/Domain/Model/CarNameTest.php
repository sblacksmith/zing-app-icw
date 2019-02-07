<?php
namespace Cars\Cardetails\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CarNameTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Domain\Model\CarName
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cars\Cardetails\Domain\Model\CarName();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCNIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCNId()
        );
    }

    /**
     * @test
     */
    public function setCNIdForIntSetsCNId()
    {
        $this->subject->setCNId(12);

        self::assertAttributeEquals(
            12,
            'cNId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCName()
        );
    }

    /**
     * @test
     */
    public function setCNameForStringSetsCName()
    {
        $this->subject->setCName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cName',
            $this->subject
        );
    }
}
