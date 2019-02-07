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
 * SellerInfo
 */
class SellerInfo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * sellerId
     * 
     * @var int
     */
    protected $sellerId = 0;

    /**
     * sellerName
     * 
     * @var string
     */
    protected $sellerName = '';

    /**
     * sellerContact
     * 
     * @var string
     */
    protected $sellerContact = '';

    /**
     * carId
     * 
     * @var int
     */
    protected $carId = 0;

    /**
     * Returns the sellerId
     * 
     * @return int $sellerId
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Sets the sellerId
     * 
     * @param int $sellerId
     * @return void
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
    }

    /**
     * Returns the sellerName
     * 
     * @return string $sellerName
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * Sets the sellerName
     * 
     * @param string $sellerName
     * @return void
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
    }

    /**
     * Returns the sellerContact
     * 
     * @return string $sellerContact
     */
    public function getSellerContact()
    {
        return $this->sellerContact;
    }

    /**
     * Sets the sellerContact
     * 
     * @param string $sellerContact
     * @return void
     */
    public function setSellerContact($sellerContact)
    {
        $this->sellerContact = $sellerContact;
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
}
