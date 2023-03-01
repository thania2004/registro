<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriaRepository::class)]
class Categoria
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'Prioridades', targetEntity: Todolist::class)]
    private Collection $TodoList;

    #[ORM\Column(length: 255)]
    private ?string $types = null;

    public function __construct()
    {
        $this->TodoList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Todolist>
     */
    public function getTodoList(): Collection
    {
        return $this->TodoList;
    }

    public function addTodoList(Todolist $todoList): self
    {
        if (!$this->TodoList->contains($todoList)) {
            $this->TodoList->add($todoList);
            $todoList->setPrioridades($this);
        }

        return $this;
    }

    public function removeTodoList(Todolist $todoList): self
    {
        if ($this->TodoList->removeElement($todoList)) {
            // set the owning side to null (unless already changed)
            if ($todoList->getPrioridades() === $this) {
                $todoList->setPrioridades(null);
            }
        }

        return $this;
    }

    public function getTypes(): ?string
    {
        return $this->types;
    }

    public function setTypes(string $types): self
    {
        $this->types = $types;

        return $this;
    }
    public function __toString() {
        return $this -> types;
    
    }
}
