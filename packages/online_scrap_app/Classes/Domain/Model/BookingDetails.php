<?php
namespace RajatDuggal\OnlineScrapApp\Domain\Model;


/***
 *
 * This file is part of the "Online Scrap App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Rajat Duggal <rajat.duggal@hof-university.de>
 *
 ***/
/**
 * BookingDetails
 */
class BookingDetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bookingId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bookingId = '';

    /**
     * quantity
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = 0;

    /**
     * subcategory
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory>
     */
    protected $subcategory = null;

    /**
     * Returns the bookingId
     * 
     * @return string $bookingId
     */
    public function getBookingId()
    {
        return $this->bookingId;
    }

    /**
     * Sets the bookingId
     * 
     * @param string $bookingId
     * @return void
     */
    public function setBookingId($bookingId)
    {
        $this->bookingId = $bookingId;
    }

    /**
     * Returns the quantity
     * 
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

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
        $this->subcategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategory
     * @return void
     */
    public function addSubcategory(\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategory)
    {
        $this->subcategory->attach($subcategory);
    }

    /**
     * Removes a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategoryToRemove The SubCategory to be removed
     * @return void
     */
    public function removeSubcategory(\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategoryToRemove)
    {
        $this->subcategory->detach($subcategoryToRemove);
    }

    /**
     * Returns the subcategory
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory> $subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Sets the subcategory
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory> $subcategory
     * @return void
     */
    public function setSubcategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $subcategory)
    {
        $this->subcategory = $subcategory;
    }
}
