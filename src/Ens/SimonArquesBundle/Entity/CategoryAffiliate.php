<?php

namespace Ens\SimonArquesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ens\SimonArquesBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Ens\SimonArquesBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \Ens\SimonArquesBundle\Entity\Category $category
     * @return CategoryAffiliate
     */
    public function setCategory(\Ens\SimonArquesBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Ens\SimonArquesBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param \Ens\SimonArquesBundle\Entity\Affiliate $affiliate
     * @return CategoryAffiliate
     */
    public function setAffiliate(\Ens\SimonArquesBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \Ens\SimonArquesBundle\Entity\Affiliate
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}
