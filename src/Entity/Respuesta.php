<?php

namespace App\Entity;

use App\Repository\RespuestaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RespuestaRepository::class)
 */
class Respuesta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $texto;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity=Message::class, inversedBy="respuestas")
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(?Message $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}
