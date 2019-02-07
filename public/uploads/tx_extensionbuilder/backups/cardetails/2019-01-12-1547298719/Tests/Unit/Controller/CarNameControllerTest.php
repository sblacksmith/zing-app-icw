<?php
namespace Cars\Cardetails\Tests\Unit\Controller;

/**
 * Test case.
 */
class CarNameControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Controller\CarNameController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cars\Cardetails\Controller\CarNameController::class)
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
    public function listActionFetchesAllCarNamesFromRepositoryAndAssignsThemToView()
    {

        $allCarNames = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $carNameRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $carNameRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCarNames));
        $this->inject($this->subject, 'carNameRepository', $carNameRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('carNames', $allCarNames);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCarNameToView()
    {
        $carName = new \Cars\Cardetails\Domain\Model\CarName();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('carName', $carName);

        $this->subject->showAction($carName);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCarNameToCarNameRepository()
    {
        $carName = new \Cars\Cardetails\Domain\Model\CarName();

        $carNameRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $carNameRepository->expects(self::once())->method('add')->with($carName);
        $this->inject($this->subject, 'carNameRepository', $carNameRepository);

        $this->subject->createAction($carName);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCarNameToView()
    {
        $carName = new \Cars\Cardetails\Domain\Model\CarName();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('carName', $carName);

        $this->subject->editAction($carName);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCarNameInCarNameRepository()
    {
        $carName = new \Cars\Cardetails\Domain\Model\CarName();

        $carNameRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $carNameRepository->expects(self::once())->method('update')->with($carName);
        $this->inject($this->subject, 'carNameRepository', $carNameRepository);

        $this->subject->updateAction($carName);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCarNameFromCarNameRepository()
    {
        $carName = new \Cars\Cardetails\Domain\Model\CarName();

        $carNameRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $carNameRepository->expects(self::once())->method('remove')->with($carName);
        $this->inject($this->subject, 'carNameRepository', $carNameRepository);

        $this->subject->deleteAction($carName);
    }
}
