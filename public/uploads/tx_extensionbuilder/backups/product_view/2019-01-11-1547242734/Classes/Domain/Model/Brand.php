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
 * Brand
 */
class Brand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * brand
     * 
     * @var string
     */
    protected $brand = '';

    /**
     * Returns the brand
     * 
     * @return string $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     * 
     * @param string $brand
     * @return void
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
