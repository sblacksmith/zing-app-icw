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
 * Price
 */
class Price extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * pId
     * 
     * @var int
     */
    protected $pId = 0;

    /**
     * price
     * 
     * @var float
     */
    protected $price = 0.0;

    /**
     * Returns the pId
     * 
     * @return int $pId
     */
    public function getPId()
    {
        return $this->pId;
    }

    /**
     * Sets the pId
     * 
     * @param int $pId
     * @return void
     */
    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
