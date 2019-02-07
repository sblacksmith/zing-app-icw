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
 * CarName
 */
class CarName extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * cNId
     * 
     * @var int
     */
    protected $cNId = 0;

    /**
     * cName
     * 
     * @var string
     */
    protected $cName = '';

    /**
     * Returns the cNId
     * 
     * @return int $cNId
     */
    public function getCNId()
    {
        return $this->cNId;
    }

    /**
     * Sets the cNId
     * 
     * @param int $cNId
     * @return void
     */
    public function setCNId($cNId)
    {
        $this->cNId = $cNId;
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
}
