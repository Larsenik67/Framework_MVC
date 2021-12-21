<?php
namespace App\Entity;

use JsonSerializable;

class Product extends AbstractEntity implements JsonSerializable
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;

    protected $category;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return ucwords(strtolower($this->name));
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    public function getPriceVAT()
    {
        return $this->price*1.2;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name
        ];
    }
}

