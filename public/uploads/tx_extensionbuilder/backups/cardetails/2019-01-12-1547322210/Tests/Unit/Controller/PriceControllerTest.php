<?php
namespace Cars\Cardetails\Tests\Unit\Controller;

/**
 * Test case.
 */
class PriceControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Controller\PriceController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cars\Cardetails\Controller\PriceController::class)
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
    public function listActionFetchesAllPricesFromRepositoryAndAssignsThemToView()
    {

        $allPrices = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $priceRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $priceRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPrices));
        $this->inject($this->subject, 'priceRepository', $priceRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('prices', $allPrices);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPriceToView()
    {
        $price = new \Cars\Cardetails\Domain\Model\Price();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('price', $price);

        $this->subject->showAction($price);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenPriceToPriceRepository()
    {
        $price = new \Cars\Cardetails\Domain\Model\Price();

        $priceRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $priceRepository->expects(self::once())->method('add')->with($price);
        $this->inject($this->subject, 'priceRepository', $priceRepository);

        $this->subject->createAction($price);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenPriceToView()
    {
        $price = new \Cars\Cardetails\Domain\Model\Price();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('price', $price);

        $this->subject->editAction($price);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenPriceInPriceRepository()
    {
        $price = new \Cars\Cardetails\Domain\Model\Price();

        $priceRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $priceRepository->expects(self::once())->method('update')->with($price);
        $this->inject($this->subject, 'priceRepository', $priceRepository);

        $this->subject->updateAction($price);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenPriceFromPriceRepository()
    {
        $price = new \Cars\Cardetails\Domain\Model\Price();

        $priceRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $priceRepository->expects(self::once())->method('remove')->with($price);
        $this->inject($this->subject, 'priceRepository', $priceRepository);

        $this->subject->deleteAction($price);
    }
}
