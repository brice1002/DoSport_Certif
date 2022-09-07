<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Product::class)]
    private $products;

    #[ORM\OneToMany(mappedBy: 'genre', targetEntity: Product::class)]
    private $products_genre;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->products_genre = new ArrayCollection();
    }

    // public function __toString(){
    //     return $this->getName();
    // }

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
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setCategory($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategory() === $this) {
                $product->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProductsGenre(): Collection
    {
        return $this->products_genre;
    }

    public function addProductsGenre(Product $productsGenre): self
    {
        if (!$this->products_genre->contains($productsGenre)) {
            $this->products_genre[] = $productsGenre;
            $productsGenre->setGenre($this);
        }

        return $this;
    }

    public function removeProductsGenre(Product $productsGenre): self
    {
        if ($this->products_genre->removeElement($productsGenre)) {
            // set the owning side to null (unless already changed)
            if ($productsGenre->getGenre() === $this) {
                $productsGenre->setGenre(null);
            }
        }

        return $this;
    }
}
