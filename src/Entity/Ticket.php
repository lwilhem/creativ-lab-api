<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
#[ApiResource]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $file;

    #[ORM\Column(type: 'datetime')]
    private $createdAt;

    #[ORM\Column(type: 'string', length: 255)]
    private $openedBy;

    #[ORM\Column(type: 'boolean')]
    private $isHandled;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $ClosedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getOpenedBy(): ?string
    {
        return $this->openedBy;
    }

    public function setOpenedBy(string $openedBy): self
    {
        $this->openedBy = $openedBy;

        return $this;
    }

    public function getIsHandled(): ?bool
    {
        return $this->isHandled;
    }

    public function setIsHandled(bool $isHandled): self
    {
        $this->isHandled = $isHandled;

        return $this;
    }

    public function getClosedAt(): ?\DateTimeInterface
    {
        return $this->ClosedAt;
    }

    public function setClosedAt(?\DateTimeInterface $ClosedAt): self
    {
        $this->ClosedAt = $ClosedAt;

        return $this;
    }
}
