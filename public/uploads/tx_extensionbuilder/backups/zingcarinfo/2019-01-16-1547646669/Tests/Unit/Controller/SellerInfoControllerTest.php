<?php
namespace Zingcarinfo\Zingcarinfo\Tests\Unit\Controller;

/**
 * Test case.
 */
class SellerInfoControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zingcarinfo\Zingcarinfo\Controller\SellerInfoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Zingcarinfo\Zingcarinfo\Controller\SellerInfoController::class)
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
    public function listActionFetchesAllSellerInfosFromRepositoryAndAssignsThemToView()
    {

        $allSellerInfos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sellerInfoRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sellerInfoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSellerInfos));
        $this->inject($this->subject, 'sellerInfoRepository', $sellerInfoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sellerInfos', $allSellerInfos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSellerInfoToView()
    {
        $sellerInfo = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sellerInfo', $sellerInfo);

        $this->subject->showAction($sellerInfo);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSellerInfoToSellerInfoRepository()
    {
        $sellerInfo = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();

        $sellerInfoRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerInfoRepository->expects(self::once())->method('add')->with($sellerInfo);
        $this->inject($this->subject, 'sellerInfoRepository', $sellerInfoRepository);

        $this->subject->createAction($sellerInfo);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSellerInfoToView()
    {
        $sellerInfo = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sellerInfo', $sellerInfo);

        $this->subject->editAction($sellerInfo);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSellerInfoInSellerInfoRepository()
    {
        $sellerInfo = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();

        $sellerInfoRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerInfoRepository->expects(self::once())->method('update')->with($sellerInfo);
        $this->inject($this->subject, 'sellerInfoRepository', $sellerInfoRepository);

        $this->subject->updateAction($sellerInfo);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSellerInfoFromSellerInfoRepository()
    {
        $sellerInfo = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();

        $sellerInfoRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerInfoRepository->expects(self::once())->method('remove')->with($sellerInfo);
        $this->inject($this->subject, 'sellerInfoRepository', $sellerInfoRepository);

        $this->subject->deleteAction($sellerInfo);
    }
}
