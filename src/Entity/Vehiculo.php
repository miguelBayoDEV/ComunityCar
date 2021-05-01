<?php

namespace App\Entity;

use App\Repository\VehiculoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculoRepository::class)
 */
class Vehiculo
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
    private $modelo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marca;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaModificacion;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="vehiculos")
     */
    private $propietario;

    /**
     * @ORM\Column(type="boolean")
     */
    private $eliminado;

    /**
     * @ORM\Column(type="boolean")
     */
    private $venta;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    /**
     * @ORM\Column(type="boolean")
     */
    private $oculto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getFechaModificacion(): ?\DateTimeInterface
    {
        return $this->fechaModificacion;
    }

    public function setFechaModificacion(\DateTimeInterface $fechaModificacion): self
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    public function getPropietario(): ?User
    {
        return $this->propietario;
    }

    public function setPropietario(?User $propietario): self
    {
        $this->propietario = $propietario;

        return $this;
    }

    public function getEliminado(): ?bool
    {
        return $this->eliminado;
    }

    public function setEliminado(bool $eliminado): self
    {
        $this->eliminado = $eliminado;

        return $this;
    }

    public function getVenta(): ?bool
    {
        return $this->venta;
    }

    public function setVenta(bool $venta): self
    {
        $this->venta = $venta;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getOculto(): ?bool
    {
        return $this->oculto;
    }

    public function setOculto(bool $oculto): self
    {
        $this->oculto = $oculto;

        return $this;
    }
}
