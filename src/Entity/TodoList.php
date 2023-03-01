<?php

namespace App\Entity;

use App\Repository\TodoListRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TodoListRepository::class)]
class TodoList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $Asignatura = null;

    #[ORM\Column(length: 255)]
    private ?string $Turno = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Tiempo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Observarciones = null;

    #[ORM\ManyToOne(inversedBy: 'TodoList')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categoria $Prioridades = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsignatura(): ?string
    {
        return $this->Asignatura;
    }

    public function setAsignatura(string $Asignatura): self
    {
        $this->Asignatura = $Asignatura;

        return $this;
    }

    public function getTurno(): ?string
    {
        return $this->Turno;
    }

    public function setTurno(string $Turno): self
    {
        $this->Turno = $Turno;

        return $this;
    }

    public function getTiempo(): ?\DateTimeInterface
    {
        return $this->Tiempo;
    }

    public function setTiempo(\DateTimeInterface $Tiempo): self
    {
        $this->Tiempo = $Tiempo;

        return $this;
    }

    public function getObservarciones(): ?string
    {
        return $this->Observarciones;
    }

    public function setObservarciones(?string $Observarciones): self
    {
        $this->Observarciones = $Observarciones;

        return $this;
    }

    public function getPrioridades(): ?Categoria
    {
        return $this->Prioridades;
    }

    public function setPrioridades(?Categoria $Prioridades): self
    {
        $this->Prioridades = $Prioridades;

        return $this;
    }
}
