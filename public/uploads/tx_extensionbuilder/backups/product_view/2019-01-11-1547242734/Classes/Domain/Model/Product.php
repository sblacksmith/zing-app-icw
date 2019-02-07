<?php
namespace Productview\ProductView\Domain\Model;


/***
 *
 * This file is part of the "productview" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * id
     * 
     * @var int
     */
    protected $id = 0;

    /**
     * color
     * 
     * @var string
     */
    protected $color = '';

    /**
     * brands
     * 
     * @var \Productview\ProductView\Domain\Model\Brand
     */
    protected $brands = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the id
     * 
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     * 
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Returns the brands
     * 
     * @return \Productview\ProductView\Domain\Model\Brand $brands
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Sets the brands
     * 
     * @param \Productview\ProductView\Domain\Model\Brand $brands
     * @return void
     */
    public function setBrands(\Productview\ProductView\Domain\Model\Brand $brands)
    {
        $this->brands = $brands;
    }
}
