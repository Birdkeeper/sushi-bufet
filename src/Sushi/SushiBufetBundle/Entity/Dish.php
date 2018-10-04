<?php

namespace Sushi\SushiBufetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * DishCategory
 *
 * @ORM\Table(name="dish")
 * @ORM\Entity(repositoryClass="Sushi\SushiBufetBundle\Repository\DishRepository")
 */
class Dish
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(name="composition", type="string", length=255)
     */
    private $composition;

    /**
     * @var float
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="DishCategory", inversedBy="dishes")
     */
    private $dishCategory;


    /**
     * Constructor
     */
    public function __construct()
    {
//        $this->drugs = new ArrayCollection();
//        $this->diseases = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Dish
     */
    public function setId(int $id): Dish
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Dish
     */
    public function setTitle(string $title): Dish
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getComposition(): string
    {
        return $this->composition;
    }

    /**
     * @param string $composition
     * @return Dish
     */
    public function setComposition(string $composition): Dish
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Dish
     */
    public function setPrice(float $price): Dish
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return DishCategory
     */
    public function getDishCategory()
    {
        return $this->dishCategory;
    }

    /**
     * @param DishCategory $dishCategory
     * @return Dish
     */
    public function setDishCategory($dishCategory): Dish
    {
        $this->dishCategory = $dishCategory;

        return $this;
    }

}
