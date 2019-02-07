<?php
namespace Cars\Cardetails\Domain\Model;


/***
 *
 * This file is part of the "Car Details" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * CarDetails
 */
class CarDetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * cId
     * 
     * @var int
     */
    protected $cId = 0;

    /**
     * cName
     * 
     * @var string
     */
    protected $cName = '';

    /**
     * cBrand
     * 
     * @var string
     */
    protected $cBrand = '';

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
     * fuelType
     * 
     * @var string
     */
    protected $fuelType = '';

    /**
     * seller
     * 
     * @var string
     */
    protected $seller = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * getBrand
     * 
     * @var \Cars\Cardetails\Domain\Model\Brand
     */
    protected $getBrand = null;

    /**
     * getCName
     * 
     * @var \Cars\Cardetails\Domain\Model\CarName
     */
    protected $getCName = null;

    /**
     * getFuelType
     * 
     * @var \Cars\Cardetails\Domain\Model\FuelType
     */
    protected $getFuelType = null;

    /**
     * getPrice
     * 
     * @var \Cars\Cardetails\Domain\Model\Price
     */
    protected $getPrice = null;

    /**
     * getSellerDetails
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Cars\Cardetails\Domain\Model\SellerDetails>
     * @cascade remove
     */
    protected $getSellerDetails = null;

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
        $this->getSellerDetails = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the cId
     * 
     * @return int $cId
     */
    public function getCId()
    {
        return $this->cId;
    }

    /**
     * Sets the cId
     * 
     * @param int $cId
     * @return void
     */
    public function setCId($cId)
    {
        $this->cId = $cId;
    }

    /**
     * Returns the cName
     * 
     * @return string $cName
     */
    public function getCName()
    {
        return $this->cName;
    }

    /**
     * Sets the cName
     * 
     * @param string $cName
     * @return void
     */
    public function setCName($cName)
    {
        $this->cName = $cName;
    }

    /**
     * Returns the cBrand
     * 
     * @return string $cBrand
     */
    public function getCBrand()
    {
        return $this->cBrand;
    }

    /**
     * Sets the cBrand
     * 
     * @param string $cBrand
     * @return void
     */
    public function setCBrand($cBrand)
    {
        $this->cBrand = $cBrand;
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
     * Returns the seller
     * 
     * @return string $seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Sets the seller
     * 
     * @param string $seller
     * @return void
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * Returns the getBrand
     * 
     * @return \Cars\Cardetails\Domain\Model\Brand $getBrand
     */
    public function getGetBrand()
    {
        return $this->getBrand;
    }

    /**
     * Sets the getBrand
     * 
     * @param \Cars\Cardetails\Domain\Model\Brand $getBrand
     * @return void
     */
    public function setGetBrand(\Cars\Cardetails\Domain\Model\Brand $getBrand)
    {
        $this->getBrand = $getBrand;
    }

    /**
     * Returns the getCName
     * 
     * @return \Cars\Cardetails\Domain\Model\CarName $getCName
     */
    public function getGetCName()
    {
        return $this->getCName;
    }

    /**
     * Sets the getCName
     * 
     * @param \Cars\Cardetails\Domain\Model\CarName $getCName
     * @return void
     */
    public function setGetCName(\Cars\Cardetails\Domain\Model\CarName $getCName)
    {
        $this->getCName = $getCName;
    }

    /**
     * Returns the getFuelType
     * 
     * @return \Cars\Cardetails\Domain\Model\FuelType $getFuelType
     */
    public function getGetFuelType()
    {
        return $this->getFuelType;
    }

    /**
     * Sets the getFuelType
     * 
     * @param \Cars\Cardetails\Domain\Model\FuelType $getFuelType
     * @return void
     */
    public function setGetFuelType(\Cars\Cardetails\Domain\Model\FuelType $getFuelType)
    {
        $this->getFuelType = $getFuelType;
    }

    /**
     * Returns the getPrice
     * 
     * @return \Cars\Cardetails\Domain\Model\Price $getPrice
     */
    public function getGetPrice()
    {
        return $this->getPrice;
    }

    /**
     * Sets the getPrice
     * 
     * @param \Cars\Cardetails\Domain\Model\Price $getPrice
     * @return void
     */
    public function setGetPrice(\Cars\Cardetails\Domain\Model\Price $getPrice)
    {
        $this->getPrice = $getPrice;
    }

    /**
     * Adds a SellerDetails
     * 
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $getSellerDetail
     * @return void
     */
    public function addGetSellerDetail(\Cars\Cardetails\Domain\Model\SellerDetails $getSellerDetail)
    {
        $this->getSellerDetails->attach($getSellerDetail);
    }

    /**
     * Removes a SellerDetails
     * 
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $getSellerDetailToRemove The SellerDetails to be removed
     * @return void
     */
    public function removeGetSellerDetail(\Cars\Cardetails\Domain\Model\SellerDetails $getSellerDetailToRemove)
    {
        $this->getSellerDetails->detach($getSellerDetailToRemove);
    }

    /**
     * Returns the getSellerDetails
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Cars\Cardetails\Domain\Model\SellerDetails> $getSellerDetails
     */
    public function getGetSellerDetails()
    {
        return $this->getSellerDetails;
    }

    /**
     * Sets the getSellerDetails
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Cars\Cardetails\Domain\Model\SellerDetails> $getSellerDetails
     * @return void
     */
    public function setGetSellerDetails(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $getSellerDetails)
    {
        $this->getSellerDetails = $getSellerDetails;
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
}
