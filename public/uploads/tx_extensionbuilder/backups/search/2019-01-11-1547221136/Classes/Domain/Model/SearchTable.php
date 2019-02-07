<?php
namespace SearchCars\Search\Domain\Model;


/***
 *
 * This file is part of the "Search" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * SearchTable
 */
class SearchTable extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * carBrand
     * 
     * @var string
     */
    protected $carBrand = '';

    /**
     * fuelType
     * 
     * @var string
     */
    protected $fuelType = '';

    /**
     * color
     * 
     * @var string
     */
    protected $color = '';

    /**
     * price
     * 
     * @var int
     */
    protected $price = 0;

    /**
     * milesRun
     * 
     * @var float
     */
    protected $milesRun = 0.0;

    /**
     * carsData
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SearchCars\Search\Domain\Model\CarDeatails>
     * @cascade remove
     */
    protected $carsData = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->carsData = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the carBrand
     * 
     * @return string $carBrand
     */
    public function getCarBrand()
    {
        return $this->carBrand;
    }

    /**
     * Sets the carBrand
     * 
     * @param string $carBrand
     * @return void
     */
    public function setCarBrand($carBrand)
    {
        $this->carBrand = $carBrand;
    }

    /**
     * Returns the fuelType
     * 
     * @return string $fuelType
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets the fuelType
     * 
     * @param string $fuelType
     * @return void
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    /**
     * Returns the color
     * 
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     * 
     * @param string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Returns the price
     * 
     * @return int $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param int $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the milesRun
     * 
     * @return float $milesRun
     */
    public function getMilesRun()
    {
        return $this->milesRun;
    }

    /**
     * Sets the milesRun
     * 
     * @param float $milesRun
     * @return void
     */
    public function setMilesRun($milesRun)
    {
        $this->milesRun = $milesRun;
    }

    /**
     * Adds a CarDeatails
     * 
     * @param \SearchCars\Search\Domain\Model\CarDeatails $carsDatum
     * @return void
     */
    public function addCarsDatum(\SearchCars\Search\Domain\Model\CarDeatails $carsDatum)
    {
        $this->carsData->attach($carsDatum);
    }

    /**
     * Removes a CarDeatails
     * 
     * @param \SearchCars\Search\Domain\Model\CarDeatails $carsDatumToRemove The CarDeatails to be removed
     * @return void
     */
    public function removeCarsDatum(\SearchCars\Search\Domain\Model\CarDeatails $carsDatumToRemove)
    {
        $this->carsData->detach($carsDatumToRemove);
    }

    /**
     * Returns the carsData
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SearchCars\Search\Domain\Model\CarDeatails> $carsData
     */
    public function getCarsData()
    {
        return $this->carsData;
    }

    /**
     * Sets the carsData
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SearchCars\Search\Domain\Model\CarDeatails> $carsData
     * @return void
     */
    public function setCarsData(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $carsData)
    {
        $this->carsData = $carsData;
    }
}
