<?php
namespace SearchCars\Search\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SearchTableTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SearchCars\Search\Domain\Model\SearchTable
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SearchCars\Search\Domain\Model\SearchTable();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getMilesRunReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMilesRun()
        );
    }

    /**
     * @test
     */
    public function setMilesRunForFloatSetsMilesRun()
    {
        $this->subject->setMilesRun(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'milesRun',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getCarsDataReturnsInitialValueForCarDeatails()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCarsData()
        );
    }

    /**
     * @test
     */
    public function setCarsDataForObjectStorageContainingCarDeatailsSetsCarsData()
    {
        $carsDatum = new \SearchCars\Search\Domain\Model\CarDeatails();
        $objectStorageHoldingExactlyOneCarsData = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCarsData->attach($carsDatum);
        $this->subject->setCarsData($objectStorageHoldingExactlyOneCarsData);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCarsData,
            'carsData',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCarsDatumToObjectStorageHoldingCarsData()
    {
        $carsDatum = new \SearchCars\Search\Domain\Model\CarDeatails();
        $carsDataObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $carsDataObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($carsDatum));
        $this->inject($this->subject, 'carsData', $carsDataObjectStorageMock);

        $this->subject->addCarsDatum($carsDatum);
    }

    /**
     * @test
     */
    public function removeCarsDatumFromObjectStorageHoldingCarsData()
    {
        $carsDatum = new \SearchCars\Search\Domain\Model\CarDeatails();
        $carsDataObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $carsDataObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($carsDatum));
        $this->inject($this->subject, 'carsData', $carsDataObjectStorageMock);

        $this->subject->removeCarsDatum($carsDatum);
    }
}
