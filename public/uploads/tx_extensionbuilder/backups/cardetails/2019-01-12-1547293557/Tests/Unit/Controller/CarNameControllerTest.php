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
