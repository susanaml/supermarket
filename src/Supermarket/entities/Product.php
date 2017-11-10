<?php

namespace Supermarket\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="Product", indexes={@ORM\Index(name="fk_Product_1_idx", columns={"idOffer"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProduct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="barcode", type="integer", nullable=false)
     */
    private $barcode;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=true)
     */
    private $image;

    /**
     * @var \Supermarket\entities\Offer
     *
     * @ORM\ManyToOne(targetEntity="Supermarket\entities\Offer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOffer", referencedColumnName="idOffer")
     * })
     */
    private $idoffer;



    /**
     * Get idproduct
     *
     * @return integer
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set barcode
     *
     * @param integer $barcode
     *
     * @return Product
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return integer
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set idoffer
     *
     * @param \Supermarket\entities\Offer $idoffer
     *
     * @return Product
     */
    public function setIdoffer(\Supermarket\entities\Offer $idoffer = null)
    {
        $this->idoffer = $idoffer;

        return $this;
    }

    /**
     * Get idoffer
     *
     * @return \Supermarket\entities\Offer
     */
    public function getIdoffer()
    {
        return $this->idoffer;
    }
}
