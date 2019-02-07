<?php
namespace Cars\Cardetails\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class BrandTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Domain\Model\Brand
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cars\Cardetails\Domain\Model\Brand();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getBId()
        );
    }

    /**
     * @test
     */
    public function setBIdForIntSetsBId()
    {
        $this->subject->setBId(12);

        self::assertAttributeEquals(
            12,
            'bId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBName()
        );
    }

    /**
     * @test
     */
    public function setBNameForStringSetsBName()
    {
        $this->subject->setBName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bName',
            $this->subject
        );
    }
}
