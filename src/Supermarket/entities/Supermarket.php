<?php

namespace Supermarket\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supermarket
 *
 * @ORM\Table(name="SuperMarket", indexes={@ORM\Index(name="fk_SuperMarket_1_idx", columns={"idFranchise"})})
 * @ORM\Entity
 */
class Supermarket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSuperMarket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsupermarket;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=100, nullable=false)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=200, nullable=false)
     */
    private $location;

    /**
     * @var \Supermarket\entities\Franchise
     *
     * @ORM\ManyToOne(targetEntity="Supermarket\entities\Franchise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFranchise", referencedColumnName="idFranchise")
     * })
     */
    private $idfranchise;



    /**
     * Get idsupermarket
     *
     * @return integer
     */
    public function getIdsupermarket()
    {
        return $this->idsupermarket;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Supermarket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Supermarket
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Supermarket
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set idfranchise
     *
     * @param \Supermarket\entities\Franchise $idfranchise
     *
     * @return Supermarket
     */
    public function setIdfranchise(\Supermarket\entities\Franchise $idfranchise = null)
    {
        $this->idfranchise = $idfranchise;

        return $this;
    }

    /**
     * Get idfranchise
     *
     * @return \Supermarket\entities\Franchise
     */
    public function getIdfranchise()
    {
        return $this->idfranchise;
    }
}
