<?php
namespace Cars\Cardetails\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CarDetailsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Cars\Cardetails\Domain\Model\CarDetails
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cars\Cardetails\Domain\Model\CarDetails();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCId()
        );
    }

    /**
     * @test
     */
    public function setCIdForIntSetsCId()
    {
        $this->subject->setCId(12);

        self::assertAttributeEquals(
            12,
            'cId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCName()
        );
    }

    /**
     * @test
     */
    public function setCNameForStringSetsCName()
    {
        $this->subject->setCName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCBrandReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCBrand()
        );
    }

    /**
     * @test
     */
    public function setCBrandForStringSetsCBrand()
    {
        $this->subject->setCBrand('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cBrand',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForIntSetsPrice()
    {
        $this->subject->setPrice(12);

        self::assertAttributeEquals(
            12,
            'price',
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
    public function getSellerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSeller()
        );
    }

    /**
     * @test
     */
    public function setSellerForStringSetsSeller()
    {
        $this->subject->setSeller('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'seller',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGetBrandReturnsInitialValueForBrand()
    {
        self::assertEquals(
            null,
            $this->subject->getGetBrand()
        );
    }

    /**
     * @test
     */
    public function setGetBrandForBrandSetsGetBrand()
    {
        $getBrandFixture = new \Cars\Cardetails\Domain\Model\Brand();
        $this->subject->setGetBrand($getBrandFixture);

        self::assertAttributeEquals(
            $getBrandFixture,
            'getBrand',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGetCNameReturnsInitialValueForCarName()
    {
        self::assertEquals(
            null,
            $this->subject->getGetCName()
        );
    }

    /**
     * @test
     */
    public function setGetCNameForCarNameSetsGetCName()
    {
        $getCNameFixture = new \Cars\Cardetails\Domain\Model\CarName();
        $this->subject->setGetCName($getCNameFixture);

        self::assertAttributeEquals(
            $getCNameFixture,
            'getCName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGetFuelTypeReturnsInitialValueForFuelType()
    {
        self::assertEquals(
            null,
            $this->subject->getGetFuelType()
        );
    }

    /**
     * @test
     */
    public function setGetFuelTypeForFuelTypeSetsGetFuelType()
    {
        $getFuelTypeFixture = new \Cars\Cardetails\Domain\Model\FuelType();
        $this->subject->setGetFuelType($getFuelTypeFixture);

        self::assertAttributeEquals(
            $getFuelTypeFixture,
            'getFuelType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGetPriceReturnsInitialValueForPrice()
    {
        self::assertEquals(
            null,
            $this->subject->getGetPrice()
        );
    }

    /**
     * @test
     */
    public function setGetPriceForPriceSetsGetPrice()
    {
        $getPriceFixture = new \Cars\Cardetails\Domain\Model\Price();
        $this->subject->setGetPrice($getPriceFixture);

        self::assertAttributeEquals(
            $getPriceFixture,
            'getPrice',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGetSellerDetailsReturnsInitialValueForSellerDetails()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGetSellerDetails()
        );
    }

    /**
     * @test
     */
    public function setGetSellerDetailsForObjectStorageContainingSellerDetailsSetsGetSellerDetails()
    {
        $getSellerDetail = new \Cars\Cardetails\Domain\Model\SellerDetails();
        $objectStorageHoldingExactlyOneGetSellerDetails = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGetSellerDetails->attach($getSellerDetail);
        $this->subject->setGetSellerDetails($objectStorageHoldingExactlyOneGetSellerDetails);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGetSellerDetails,
            'getSellerDetails',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addGetSellerDetailToObjectStorageHoldingGetSellerDetails()
    {
        $getSellerDetail = new \Cars\Cardetails\Domain\Model\SellerDetails();
        $getSellerDetailsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $getSellerDetailsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($getSellerDetail));
        $this->inject($this->subject, 'getSellerDetails', $getSellerDetailsObjectStorageMock);

        $this->subject->addGetSellerDetail($getSellerDetail);
    }

    /**
     * @test
     */
    public function removeGetSellerDetailFromObjectStorageHoldingGetSellerDetails()
    {
        $getSellerDetail = new \Cars\Cardetails\Domain\Model\SellerDetails();
        $getSellerDetailsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $getSellerDetailsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($getSellerDetail));
        $this->inject($this->subject, 'getSellerDetails', $getSellerDetailsObjectStorageMock);

        $this->subject->removeGetSellerDetail($getSellerDetail);
    }
}
