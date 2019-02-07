<?php
namespace Cars\Cardetails\Tests\Unit\Controller;

/**
 * Test case.
 */
class FuelTypeControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Controller\FuelTypeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cars\Cardetails\Controller\FuelTypeController::class)
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
    public function listActionFetchesAllFuelTypesFromRepositoryAndAssignsThemToView()
    {

        $allFuelTypes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $fuelTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $fuelTypeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFuelTypes));
        $this->inject($this->subject, 'fuelTypeRepository', $fuelTypeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('fuelTypes', $allFuelTypes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenFuelTypeToView()
    {
        $fuelType = new \Cars\Cardetails\Domain\Model\FuelType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('fuelType', $fuelType);

        $this->subject->showAction($fuelType);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenFuelTypeToFuelTypeRepository()
    {
        $fuelType = new \Cars\Cardetails\Domain\Model\FuelType();

        $fuelTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $fuelTypeRepository->expects(self::once())->method('add')->with($fuelType);
        $this->inject($this->subject, 'fuelTypeRepository', $fuelTypeRepository);

        $this->subject->createAction($fuelType);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenFuelTypeToView()
    {
        $fuelType = new \Cars\Cardetails\Domain\Model\FuelType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('fuelType', $fuelType);

        $this->subject->editAction($fuelType);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenFuelTypeInFuelTypeRepository()
    {
        $fuelType = new \Cars\Cardetails\Domain\Model\FuelType();

        $fuelTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $fuelTypeRepository->expects(self::once())->method('update')->with($fuelType);
        $this->inject($this->subject, 'fuelTypeRepository', $fuelTypeRepository);

        $this->subject->updateAction($fuelType);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenFuelTypeFromFuelTypeRepository()
    {
        $fuelType = new \Cars\Cardetails\Domain\Model\FuelType();

        $fuelTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $fuelTypeRepository->expects(self::once())->method('remove')->with($fuelType);
        $this->inject($this->subject, 'fuelTypeRepository', $fuelTypeRepository);

        $this->subject->deleteAction($fuelType);
    }
}
