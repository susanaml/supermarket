<?php

namespace Supermarket\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Franchise
 *
 * @ORM\Table(name="Franchise")
 * @ORM\Entity
 */
class Franchise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFranchise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfranchise;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;



    /**
     * Get idfranchise
     *
     * @return integer
     */
    public function getIdfranchise()
    {
        return $this->idfranchise;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Franchise
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
}
