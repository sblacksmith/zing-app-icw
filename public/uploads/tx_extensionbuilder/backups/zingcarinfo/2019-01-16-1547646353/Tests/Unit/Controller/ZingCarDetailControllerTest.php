<?php
namespace Zingcarinfo\Zingcarinfo\Tests\Unit\Controller;

/**
 * Test case.
 */
class ZingCarDetailControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zingcarinfo\Zingcarinfo\Controller\ZingCarDetailController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Zingcarinfo\Zingcarinfo\Controller\ZingCarDetailController::class)
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
    public function listActionFetchesAllZingCarDetailsFromRepositoryAndAssignsThemToView()
    {

        $allZingCarDetails = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $zingCarDetailRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $zingCarDetailRepository->expects(self::once())->method('findAll')->will(self::returnValue($allZingCarDetails));
        $this->inject($this->subject, 'zingCarDetailRepository', $zingCarDetailRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('zingCarDetails', $allZingCarDetails);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenZingCarDetailToView()
    {
        $zingCarDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('zingCarDetail', $zingCarDetail);

        $this->subject->showAction($zingCarDetail);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenZingCarDetailToZingCarDetailRepository()
    {
        $zingCarDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail();

        $zingCarDetailRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $zingCarDetailRepository->expects(self::once())->method('add')->with($zingCarDetail);
        $this->inject($this->subject, 'zingCarDetailRepository', $zingCarDetailRepository);

        $this->subject->createAction($zingCarDetail);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenZingCarDetailToView()
    {
        $zingCarDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('zingCarDetail', $zingCarDetail);

        $this->subject->editAction($zingCarDetail);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenZingCarDetailInZingCarDetailRepository()
    {
        $zingCarDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail();

        $zingCarDetailRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $zingCarDetailRepository->expects(self::once())->method('update')->with($zingCarDetail);
        $this->inject($this->subject, 'zingCarDetailRepository', $zingCarDetailRepository);

        $this->subject->updateAction($zingCarDetail);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenZingCarDetailFromZingCarDetailRepository()
    {
        $zingCarDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail();

        $zingCarDetailRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $zingCarDetailRepository->expects(self::once())->method('remove')->with($zingCarDetail);
        $this->inject($this->subject, 'zingCarDetailRepository', $zingCarDetailRepository);

        $this->subject->deleteAction($zingCarDetail);
    }
}
