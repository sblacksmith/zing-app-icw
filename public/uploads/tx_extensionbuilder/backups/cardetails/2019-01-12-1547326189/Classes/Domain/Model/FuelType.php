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
 * FuelType
 */
class FuelType extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * fId
     * 
     * @var int
     */
    protected $fId = 0;

    /**
     * fuelType
     * 
     * @var string
     */
    protected $fuelType = '';

    /**
     * Returns the fId
     * 
     * @return int $fId
     */
    public function getFId()
    {
        return $this->fId;
    }

    /**
     * Sets the fId
     * 
     * @param int $fId
     * @return void
     */
    public function setFId($fId)
    {
        $this->fId = $fId;
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
}
