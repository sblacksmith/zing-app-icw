<?php
namespace Zing\Productoverview\Tests\Unit\Controller;

/**
 * Test case.
 */
class CategoriesControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zing\Productoverview\Controller\CategoriesController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Zing\Productoverview\Controller\CategoriesController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCategoriessFromRepositoryAndAssignsThemToView()
    {

        $allCategoriess = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $categoriesRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $categoriesRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCategoriess));
        $this->inject($this->subject, 'categoriesRepository', $categoriesRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('categoriess', $allCategoriess);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
