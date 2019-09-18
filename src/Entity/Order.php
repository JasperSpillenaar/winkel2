<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $aantal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="product_id")
     */
    private $product_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Factuur", inversedBy="orders")
     */
    private $factuur_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAantal(): ?int
    {
        return $this->aantal;
    }

    public function setAantal(int $aantal): self
    {
        $this->aantal = $aantal;

        return $this;
    }

    public function getProductId(): ?product
    {
        return $this->product_id;
    }

    public function setProductId(?product $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getFactuurId(): ?factuur
    {
        return $this->factuur_id;
    }

    public function setFactuurId(?factuur $factuur_id): self
    {
        $this->factuur_id = $factuur_id;

        return $this;
    }
}
