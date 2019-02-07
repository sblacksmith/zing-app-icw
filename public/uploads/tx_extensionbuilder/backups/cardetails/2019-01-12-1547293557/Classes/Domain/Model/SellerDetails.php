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
 * SellerDetails
 */
class SellerDetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * sId
     * 
     * @var int
     */
    protected $sId = 0;

    /**
     * sName
     * 
     * @var string
     */
    protected $sName = '';

    /**
     * sContact
     * 
     * @var string
     */
    protected $sContact = '';

    /**
     * Returns the sId
     * 
     * @return int $sId
     */
    public function getSId()
    {
        return $this->sId;
    }

    /**
     * Sets the sId
     * 
     * @param int $sId
     * @return void
     */
    public function setSId($sId)
    {
        $this->sId = $sId;
    }

    /**
     * Returns the sName
     * 
     * @return string $sName
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * Sets the sName
     * 
     * @param string $sName
     * @return void
     */
    public function setSName($sName)
    {
        $this->sName = $sName;
    }

    /**
     * Returns the sContact
     * 
     * @return string $sContact
     */
    public function getSContact()
    {
        return $this->sContact;
    }

    /**
     * Sets the sContact
     * 
     * @param string $sContact
     * @return void
     */
    public function setSContact($sContact)
    {
        $this->sContact = $sContact;
    }
}
