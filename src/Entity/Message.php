<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
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
     * @ORM\Column(type="integer")
     */
    private $emisor;

    /**
     * @ORM\Column(type="integer")
     */
    private $receptor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaEnvio;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaLectura;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="messages")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Respuesta::class, mappedBy="message")
     */
    private $respuestas;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reportado;

    /**
     * @ORM\Column(type="integer")
     */
    private $vehiculo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $oculto;

    public function __construct()
    {
        $this->respuestas = new ArrayCollection();
    }

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

    public function getEmisor(): ?int
    {
        return $this->emisor;
    }

    public function setEmisor(int $emisor): self
    {
        $this->emisor = $emisor;

        return $this;
    }

    public function getReceptor(): ?int
    {
        return $this->receptor;
    }

    public function setReceptor(int $receptor): self
    {
        $this->receptor = $receptor;

        return $this;
    }

    public function getFechaEnvio(): ?\DateTimeInterface
    {
        return $this->fechaEnvio;
    }

    public function setFechaEnvio(\DateTimeInterface $fechaEnvio): self
    {
        $this->fechaEnvio = $fechaEnvio;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFechaLectura(): ?\DateTimeInterface
    {
        return $this->fechaLectura;
    }

    public function setFechaLectura(\DateTimeInterface $fechaLectura): self
    {
        $this->fechaLectura = $fechaLectura;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Respuesta[]
     */
    public function getRespuestas(): Collection
    {
        return $this->respuestas;
    }

    public function addRespuesta(Respuesta $respuesta): self
    {
        if (!$this->respuestas->contains($respuesta)) {
            $this->respuestas[] = $respuesta;
            $respuesta->setMessage($this);
        }

        return $this;
    }

    public function removeRespuesta(Respuesta $respuesta): self
    {
        if ($this->respuestas->removeElement($respuesta)) {
            // set the owning side to null (unless already changed)
            if ($respuesta->getMessage() === $this) {
                $respuesta->setMessage(null);
            }
        }

        return $this;
    }

    public function getReportado(): ?bool
    {
        return $this->reportado;
    }

    public function setReportado(bool $reportado): self
    {
        $this->reportado = $reportado;

        return $this;
    }

    public function getVehiculo(): ?int
    {
        return $this->vehiculo;
    }

    public function setVehiculo(int $vehiculo): self
    {
        $this->vehiculo = $vehiculo;

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
