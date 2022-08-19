<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ServiceAccoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ServiceAccoRepository::class)]
#[ApiResource(
    attributes: ["pagination_enabled" => false],
    denormalizationContext: ['groups' => ['service:write']],
    itemOperations: [
        "get"  => [
            'normalization_context' => ['groups' => ['service:read']]
        ],
        "put" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ]
        ],
        "delete" => [
            "security" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ]
        ],
    ],
    collectionOperations: [
        "get" => [
            'normalization_context' => ['groups' => ['service:read']]
        ],
        "post" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ]
        ],
    ]
)]
class ServiceAcco
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['service:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['service:read', 'accommodation:read', 'service:write'])]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Accommodation::class, mappedBy: 'serviceAcco')]
    private Collection $accommodations;

    public function __construct()
    {
        $this->accommodations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Accommodation>
     */
    public function getAccommodations(): Collection
    {
        return $this->accommodations;
    }

    public function addAccommodation(Accommodation $accommodation): self
    {
        if (!$this->accommodations->contains($accommodation)) {
            $this->accommodations->add($accommodation);
            $accommodation->addServiceAcco($this);
        }

        return $this;
    }

    public function removeAccommodation(Accommodation $accommodation): self
    {
        if ($this->accommodations->removeElement($accommodation)) {
            $accommodation->removeServiceAcco($this);
        }

        return $this;
    }
}
