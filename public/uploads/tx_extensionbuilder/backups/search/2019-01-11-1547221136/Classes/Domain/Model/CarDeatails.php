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
 * CarDeatails
 */
class CarDeatails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * model
     * 
     * @var string
     */
    protected $model = '';

    /**
     * fuel
     * 
     * @var string
     */
    protected $fuel = '';

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
     * miles
     * 
     * @var float
     */
    protected $miles = 0.0;

    /**
     * Returns the model
     * 
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     * 
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Returns the fuel
     * 
     * @return string $fuel
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Sets the fuel
     * 
     * @param string $fuel
     * @return void
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
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
     * Returns the miles
     * 
     * @return float $miles
     */
    public function getMiles()
    {
        return $this->miles;
    }

    /**
     * Sets the miles
     * 
     * @param float $miles
     * @return void
     */
    public function setMiles($miles)
    {
        $this->miles = $miles;
    }
}
