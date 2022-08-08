<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
#[ApiResource(
    attributes: ["pagination_enabled" => false],
    collectionOperations: [
        "get",
    ],
    normalizationContext: ['groups' => ['booking:read']],
)]
#[ApiFilter(SearchFilter::class, properties: ['accommodation.user' => 'exact'])]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    #[Groups(['booking:read', 'accommodation:read'])]
    private $total;

    #[ORM\Column(type: 'date')]
    #[Groups(['booking:read', 'accommodation:read'])]
    private $startDate;

    #[ORM\Column(type: 'date')]
    #[Groups(['booking:read'])]
    private $endDate;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'bookings')]
    #[Groups(['booking:read'])]
    private $user;

    #[ORM\ManyToOne(targetEntity: Accommodation::class, inversedBy: 'bookings')]
    private $accommodation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

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

    public function getAccommodation(): ?Accommodation
    {
        return $this->accommodation;
    }

    public function setAccommodation(?Accommodation $accommodation): self
    {
        $this->accommodation = $accommodation;

        return $this;
    }
}
