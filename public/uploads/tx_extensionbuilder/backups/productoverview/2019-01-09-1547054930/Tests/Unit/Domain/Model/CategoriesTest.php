<?php
namespace Zing\Productoverview\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CategoriesTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zing\Productoverview\Domain\Model\Categories
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Zing\Productoverview\Domain\Model\Categories();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForStringSetsCategory()
    {
        $this->subject->setCategory('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'category',
            $this->subject
        );
    }
}
