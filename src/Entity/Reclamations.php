<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamations
 *
 * @ORM\Table(name="reclamations", indexes={@ORM\Index(name="User_id", columns={"User_id"})})
 * @ORM\Entity
 */
class Reclamations
{
    /**
     * @var string
     *
     * @ORM\Column(name="User_id", type="string", length=50, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="Subject", type="text", length=65535, nullable=false)
     */
    private $subject;

    /**
     * @var int
     *
     * @ORM\Column(name="Reclamation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reclamationId;

    /**
     * @var string
     *
     * @ORM\Column(name="Reclamation_context", type="text", length=65535, nullable=false)
     */
    private $reclamationContext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getReclamationId(): ?int
    {
        return $this->reclamationId;
    }

    public function getReclamationContext(): ?string
    {
        return $this->reclamationContext;
    }

    public function setReclamationContext(string $reclamationContext): self
    {
        $this->reclamationContext = $reclamationContext;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
