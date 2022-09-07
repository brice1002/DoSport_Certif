<?php

namespace App\Entity;

use App\Repository\CategoriesVACRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesVACRepository::class)]
class CategoriesVAC
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'categoriesVAC', targetEntity: Product::class)]
    private $productsVAC;

    public function __construct()
    {
        $this->productsVAC = new ArrayCollection();
    }

    public function __toString(){
        return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProductsVAC(): Collection
    {
        return $this->productsVAC;
    }

    public function addProductsVAC(Product $productsVAC): self
    {
        if (!$this->productsVAC->contains($productsVAC)) {
            $this->productsVAC[] = $productsVAC;
            $productsVAC->setCategoriesVAC($this);
        }

        return $this;
    }

    public function removeProductsVAC(Product $productsVAC): self
    {
        if ($this->productsVAC->removeElement($productsVAC)) {
            // set the owning side to null (unless already changed)
            if ($productsVAC->getCategoriesVAC() === $this) {
                $productsVAC->setCategoriesVAC(null);
            }
        }

        return $this;
    }
}
