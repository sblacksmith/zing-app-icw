<?php
namespace Cars\Cardetails\Tests\Unit\Controller;

/**
 * Test case.
 */
class CarDetailsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Controller\CarDetailsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cars\Cardetails\Controller\CarDetailsController::class)
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
    public function listActionFetchesAllCarDetailssFromRepositoryAndAssignsThemToView()
    {

        $allCarDetailss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $carDetailsRepository = $this->getMockBuilder(\Cars\Cardetails\Domain\Repository\CarDetailsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $carDetailsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCarDetailss));
        $this->inject($this->subject, 'carDetailsRepository', $carDetailsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('carDetailss', $allCarDetailss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCarDetailsToView()
    {
        $carDetails = new \Cars\Cardetails\Domain\Model\CarDetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('carDetails', $carDetails);

        $this->subject->showAction($carDetails);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCarDetailsToCarDetailsRepository()
    {
        $carDetails = new \Cars\Cardetails\Domain\Model\CarDetails();

        $carDetailsRepository = $this->getMockBuilder(\Cars\Cardetails\Domain\Repository\CarDetailsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $carDetailsRepository->expects(self::once())->method('add')->with($carDetails);
        $this->inject($this->subject, 'carDetailsRepository', $carDetailsRepository);

        $this->subject->createAction($carDetails);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCarDetailsToView()
    {
        $carDetails = new \Cars\Cardetails\Domain\Model\CarDetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('carDetails', $carDetails);

        $this->subject->editAction($carDetails);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCarDetailsInCarDetailsRepository()
    {
        $carDetails = new \Cars\Cardetails\Domain\Model\CarDetails();

        $carDetailsRepository = $this->getMockBuilder(\Cars\Cardetails\Domain\Repository\CarDetailsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $carDetailsRepository->expects(self::once())->method('update')->with($carDetails);
        $this->inject($this->subject, 'carDetailsRepository', $carDetailsRepository);

        $this->subject->updateAction($carDetails);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCarDetailsFromCarDetailsRepository()
    {
        $carDetails = new \Cars\Cardetails\Domain\Model\CarDetails();

        $carDetailsRepository = $this->getMockBuilder(\Cars\Cardetails\Domain\Repository\CarDetailsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $carDetailsRepository->expects(self::once())->method('remove')->with($carDetails);
        $this->inject($this->subject, 'carDetailsRepository', $carDetailsRepository);

        $this->subject->deleteAction($carDetails);
    }
}
