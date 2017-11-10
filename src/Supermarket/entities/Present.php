<?php

namespace Supermarket\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Present
 *
 * @ORM\Table(name="Present", indexes={@ORM\Index(name="fk_Present_1_idx", columns={"idProduct"}), @ORM\Index(name="fk_Present_2_idx", columns={"idSuperMarket"})})
 * @ORM\Entity
 */
class Present
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPresent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpresent;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

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
     * @var \Supermarket\entities\Supermarket
     *
     * @ORM\ManyToOne(targetEntity="Supermarket\entities\Supermarket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSuperMarket", referencedColumnName="idSuperMarket")
     * })
     */
    private $idsupermarket;



    /**
     * Get idpresent
     *
     * @return integer
     */
    public function getIdpresent()
    {
        return $this->idpresent;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Present
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set idproduct
     *
     * @param \Supermarket\entities\Product $idproduct
     *
     * @return Present
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

    /**
     * Set idsupermarket
     *
     * @param \Supermarket\entities\Supermarket $idsupermarket
     *
     * @return Present
     */
    public function setIdsupermarket(\Supermarket\entities\Supermarket $idsupermarket = null)
    {
        $this->idsupermarket = $idsupermarket;

        return $this;
    }

    /**
     * Get idsupermarket
     *
     * @return \Supermarket\entities\Supermarket
     */
    public function getIdsupermarket()
    {
        return $this->idsupermarket;
    }
}
