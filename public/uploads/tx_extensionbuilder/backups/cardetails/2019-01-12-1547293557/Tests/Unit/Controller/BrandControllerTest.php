<?php
namespace Cars\Cardetails\Tests\Unit\Controller;

/**
 * Test case.
 */
class BrandControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Controller\BrandController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cars\Cardetails\Controller\BrandController::class)
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
    public function createActionAddsTheGivenBrandToBrandRepository()
    {
        $brand = new \Cars\Cardetails\Domain\Model\Brand();

        $brandRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $brandRepository->expects(self::once())->method('add')->with($brand);
        $this->inject($this->subject, 'brandRepository', $brandRepository);

        $this->subject->createAction($brand);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBrandToView()
    {
        $brand = new \Cars\Cardetails\Domain\Model\Brand();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('brand', $brand);

        $this->subject->editAction($brand);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBrandInBrandRepository()
    {
        $brand = new \Cars\Cardetails\Domain\Model\Brand();

        $brandRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $brandRepository->expects(self::once())->method('update')->with($brand);
        $this->inject($this->subject, 'brandRepository', $brandRepository);

        $this->subject->updateAction($brand);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBrandFromBrandRepository()
    {
        $brand = new \Cars\Cardetails\Domain\Model\Brand();

        $brandRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $brandRepository->expects(self::once())->method('remove')->with($brand);
        $this->inject($this->subject, 'brandRepository', $brandRepository);

        $this->subject->deleteAction($brand);
    }
}
