<?php
namespace Cars\Cardetails\Tests\Unit\Controller;

/**
 * Test case.
 */
class SellerDetailsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Controller\SellerDetailsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cars\Cardetails\Controller\SellerDetailsController::class)
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
    public function listActionFetchesAllSellerDetailssFromRepositoryAndAssignsThemToView()
    {

        $allSellerDetailss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sellerDetailsRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sellerDetailsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSellerDetailss));
        $this->inject($this->subject, 'sellerDetailsRepository', $sellerDetailsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sellerDetailss', $allSellerDetailss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSellerDetailsToView()
    {
        $sellerDetails = new \Cars\Cardetails\Domain\Model\SellerDetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sellerDetails', $sellerDetails);

        $this->subject->showAction($sellerDetails);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSellerDetailsToSellerDetailsRepository()
    {
        $sellerDetails = new \Cars\Cardetails\Domain\Model\SellerDetails();

        $sellerDetailsRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerDetailsRepository->expects(self::once())->method('add')->with($sellerDetails);
        $this->inject($this->subject, 'sellerDetailsRepository', $sellerDetailsRepository);

        $this->subject->createAction($sellerDetails);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSellerDetailsToView()
    {
        $sellerDetails = new \Cars\Cardetails\Domain\Model\SellerDetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sellerDetails', $sellerDetails);

        $this->subject->editAction($sellerDetails);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSellerDetailsInSellerDetailsRepository()
    {
        $sellerDetails = new \Cars\Cardetails\Domain\Model\SellerDetails();

        $sellerDetailsRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerDetailsRepository->expects(self::once())->method('update')->with($sellerDetails);
        $this->inject($this->subject, 'sellerDetailsRepository', $sellerDetailsRepository);

        $this->subject->updateAction($sellerDetails);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSellerDetailsFromSellerDetailsRepository()
    {
        $sellerDetails = new \Cars\Cardetails\Domain\Model\SellerDetails();

        $sellerDetailsRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerDetailsRepository->expects(self::once())->method('remove')->with($sellerDetails);
        $this->inject($this->subject, 'sellerDetailsRepository', $sellerDetailsRepository);

        $this->subject->deleteAction($sellerDetails);
    }
}
