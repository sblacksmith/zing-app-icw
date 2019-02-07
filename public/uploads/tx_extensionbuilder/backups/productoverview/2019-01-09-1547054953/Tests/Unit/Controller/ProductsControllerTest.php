<?php
namespace Zing\Productoverview\Tests\Unit\Controller;

/**
 * Test case.
 */
class ProductsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zing\Productoverview\Controller\ProductsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Zing\Productoverview\Controller\ProductsController::class)
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
    public function listActionFetchesAllProductssFromRepositoryAndAssignsThemToView()
    {

        $allProductss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $productsRepository = $this->getMockBuilder(\Zing\Productoverview\Domain\Repository\ProductsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $productsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProductss));
        $this->inject($this->subject, 'productsRepository', $productsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('productss', $allProductss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProductsToView()
    {
        $products = new \Zing\Productoverview\Domain\Model\Products();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('products', $products);

        $this->subject->showAction($products);
    }
}
