<?php

namespace Ridho\PhpUnitTest;

class Product
{
    private string $id, $name, $description;
    private int $price, $quantity;

    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  string
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  string
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  string
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  int
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  int
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }
}
