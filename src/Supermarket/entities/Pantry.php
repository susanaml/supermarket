<?php

namespace Supermarket\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pantry
 *
 * @ORM\Table(name="Pantry", indexes={@ORM\Index(name="fk_Pantry_1_idx", columns={"idProduct"})})
 * @ORM\Entity
 */
class Pantry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPantry", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpantry;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var \Supermarket\entities\Product
     *
     * @ORM\ManyToOne(targetEntity="Supermarket\entities\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduct", referencedColumnName="idProduct")
     * })
     */
    private $idproduct;



    /**
     * Get idpantry
     *
     * @return integer
     */
    public function getIdpantry()
    {
        return $this->idpantry;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Pantry
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set idproduct
     *
     * @param \Supermarket\entities\Product $idproduct
     *
     * @return Pantry
     */
    public function setIdproduct(\Supermarket\entities\Product $idproduct = null)
    {
        $this->idproduct = $idproduct;

        return $this;
    }

    /**
     * Get idproduct
     *
     * @return \Supermarket\entities\Product
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
}
