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

    /**
     * @test
     */
    public function showActionAssignsTheGivenSearchTableToView()
    {
        $searchTable = new \SearchCars\Search\Domain\Model\SearchTable();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('searchTable', $searchTable);

        $this->subject->showAction($searchTable);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSearchTableToSearchTableRepository()
    {
        $searchTable = new \SearchCars\Search\Domain\Model\SearchTable();

        $searchTableRepository = $this->getMockBuilder(\SearchCars\Search\Domain\Repository\SearchTableRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $searchTableRepository->expects(self::once())->method('add')->with($searchTable);
        $this->inject($this->subject, 'searchTableRepository', $searchTableRepository);

        $this->subject->createAction($searchTable);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSearchTableToView()
    {
        $searchTable = new \SearchCars\Search\Domain\Model\SearchTable();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('searchTable', $searchTable);

        $this->subject->editAction($searchTable);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSearchTableInSearchTableRepository()
    {
        $searchTable = new \SearchCars\Search\Domain\Model\SearchTable();

        $searchTableRepository = $this->getMockBuilder(\SearchCars\Search\Domain\Repository\SearchTableRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $searchTableRepository->expects(self::once())->method('update')->with($searchTable);
        $this->inject($this->subject, 'searchTableRepository', $searchTableRepository);

        $this->subject->updateAction($searchTable);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSearchTableFromSearchTableRepository()
    {
        $searchTable = new \SearchCars\Search\Domain\Model\SearchTable();

        $searchTableRepository = $this->getMockBuilder(\SearchCars\Search\Domain\Repository\SearchTableRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $searchTableRepository->expects(self::once())->method('remove')->with($searchTable);
        $this->inject($this->subject, 'searchTableRepository', $searchTableRepository);

        $this->subject->deleteAction($searchTable);
    }
}
