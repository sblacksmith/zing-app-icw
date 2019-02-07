<?php
namespace Zingcarinfo\Zingcarinfo\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ZingCarDetailTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCarIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCarId()
        );
    }

    /**
     * @test
     */
    public function setCarIdForIntSetsCarId()
    {
        $this->subject->setCarId(12);

        self::assertAttributeEquals(
            12,
            'carId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCarBrandReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCarBrand()
        );
    }

    /**
     * @test
     */
    public function setCarBrandForStringSetsCarBrand()
    {
        $this->subject->setCarBrand('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'carBrand',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCarNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCarName()
        );
    }

    /**
     * @test
     */
    public function setCarNameForStringSetsCarName()
    {
        $this->subject->setCarName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'carName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCarPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCarPrice()
        );
    }

    /**
     * @test
     */
    public function setCarPriceForIntSetsCarPrice()
    {
        $this->subject->setCarPrice(12);

        self::assertAttributeEquals(
            12,
            'carPrice',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFuelTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFuelType()
        );
    }

    /**
     * @test
     */
    public function setFuelTypeForStringSetsFuelType()
    {
        $this->subject->setFuelType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fuelType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCarImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getCarImage()
        );
    }

    /**
     * @test
     */
    public function setCarImageForFileReferenceSetsCarImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setCarImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'carImage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSellerDetailReturnsInitialValueForSellerInfo()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSellerDetail()
        );
    }

    /**
     * @test
     */
    public function setSellerDetailForObjectStorageContainingSellerInfoSetsSellerDetail()
    {
        $sellerDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();
        $objectStorageHoldingExactlyOneSellerDetail = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSellerDetail->attach($sellerDetail);
        $this->subject->setSellerDetail($objectStorageHoldingExactlyOneSellerDetail);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSellerDetail,
            'sellerDetail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSellerDetailToObjectStorageHoldingSellerDetail()
    {
        $sellerDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();
        $sellerDetailObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerDetailObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($sellerDetail));
        $this->inject($this->subject, 'sellerDetail', $sellerDetailObjectStorageMock);

        $this->subject->addSellerDetail($sellerDetail);
    }

    /**
     * @test
     */
    public function removeSellerDetailFromObjectStorageHoldingSellerDetail()
    {
        $sellerDetail = new \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo();
        $sellerDetailObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sellerDetailObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($sellerDetail));
        $this->inject($this->subject, 'sellerDetail', $sellerDetailObjectStorageMock);

        $this->subject->removeSellerDetail($sellerDetail);
    }
}
