<?php

namespace Sushi\SushiBufetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * DishCategory
 *
 * @ORM\Table(name="dish_category")
 * @ORM\Entity(repositoryClass="Sushi\SushiBufetBundle\Repository\DishCategoryRepository")
 */
class DishCategory
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
     * @ORM\OneToMany(targetEntity="Dish", mappedBy="dishCategory")
     */
    private $dishes;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dishes = new ArrayCollection();
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
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}
