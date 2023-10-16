<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Products::class, mappedBy: 'ProductsCategory')]
    private Collection $ProductsCatecories;

    public function __construct()
    {
        $this->ProductsCatecories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Products>
     */
    public function getProductsCatecories(): Collection
    {
        return $this->ProductsCatecories;
    }

    public function addProductsCatecory(Products $productsCatecory): static
    {
        if (!$this->ProductsCatecories->contains($productsCatecory)) {
            $this->ProductsCatecories->add($productsCatecory);
            $productsCatecory->addProductsCategory($this);
        }

        return $this;
    }

    public function removeProductsCatecory(Products $productsCatecory): static
    {
        if ($this->ProductsCatecories->removeElement($productsCatecory)) {
            $productsCatecory->removeProductsCategory($this);
        }

        return $this;
    }
}
