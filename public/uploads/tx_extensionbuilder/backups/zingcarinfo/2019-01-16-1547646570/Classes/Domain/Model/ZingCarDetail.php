<?php
namespace Zingcarinfo\Zingcarinfo\Domain\Model;


/***
 *
 * This file is part of the "ZingCarInfo" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * ZingCarDetail
 */
class ZingCarDetail extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * carId
     * 
     * @var int
     */
    protected $carId = 0;

    /**
     * carBrand
     * 
     * @var string
     */
    protected $carBrand = '';

    /**
     * carName
     * 
     * @var string
     */
    protected $carName = '';

    /**
     * carPrice
     * 
     * @var int
     */
    protected $carPrice = 0;

    /**
     * fuelType
     * 
     * @var string
     */
    protected $fuelType = '';

    /**
     * carImage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $carImage = null;

    /**
     * Details of the Seller
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo>
     * @cascade remove
     */
    protected $sellerDetail = null;

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
        $this->sellerDetail = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the carId
     * 
     * @return int $carId
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Sets the carId
     * 
     * @param int $carId
     * @return void
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;
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
     * Returns the carName
     * 
     * @return string $carName
     */
    public function getCarName()
    {
        return $this->carName;
    }

    /**
     * Sets the carName
     * 
     * @param string $carName
     * @return void
     */
    public function setCarName($carName)
    {
        $this->carName = $carName;
    }

    /**
     * Returns the carPrice
     * 
     * @return int $carPrice
     */
    public function getCarPrice()
    {
        return $this->carPrice;
    }

    /**
     * Sets the carPrice
     * 
     * @param int $carPrice
     * @return void
     */
    public function setCarPrice($carPrice)
    {
        $this->carPrice = $carPrice;
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
     * Returns the carImage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $carImage
     */
    public function getCarImage()
    {
        return $this->carImage;
    }

    /**
     * Sets the carImage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $carImage
     * @return void
     */
    public function setCarImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $carImage)
    {
        $this->carImage = $carImage;
    }

    /**
     * Adds a SellerInfo
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerDetail
     * @return void
     */
    public function addSellerDetail(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerDetail)
    {
        $this->sellerDetail->attach($sellerDetail);
    }

    /**
     * Removes a SellerInfo
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerDetailToRemove The SellerInfo to be removed
     * @return void
     */
    public function removeSellerDetail(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerDetailToRemove)
    {
        $this->sellerDetail->detach($sellerDetailToRemove);
    }

    /**
     * Returns the sellerDetail
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo> $sellerDetail
     */
    public function getSellerDetail()
    {
        return $this->sellerDetail;
    }

    /**
     * Sets the sellerDetail
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo> $sellerDetail
     * @return void
     */
    public function setSellerDetail(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sellerDetail)
    {
        $this->sellerDetail = $sellerDetail;
    }
}
