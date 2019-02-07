<?php
namespace SearchCars\Search\Tests\Unit\Controller;

/**
 * Test case.
 */
class SearchTableControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SearchCars\Search\Controller\SearchTableController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SearchCars\Search\Controller\SearchTableController::class)
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
    public function listActionFetchesAllSearchTablesFromRepositoryAndAssignsThemToView()
    {

        $allSearchTables = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $searchTableRepository = $this->getMockBuilder(\SearchCars\Search\Domain\Repository\SearchTableRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $searchTableRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSearchTables));
        $this->inject($this->subject, 'searchTableRepository', $searchTableRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('searchTables', $allSearchTables);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
