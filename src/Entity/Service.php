<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[ApiResource(
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
            "denormalizetion_context" => ['groups' => ['service:write']],
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ]
        ],
    ]
)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['service:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['accommodation:read', 'service:read', 'service:write'])]
    private $name;

    #[ORM\ManyToMany(targetEntity: Accommodation::class, mappedBy: 'service')]
    private $accommodations;

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
            $this->accommodations[] = $accommodation;
            $accommodation->addService($this);
        }

        return $this;
    }

    public function removeAccommodation(Accommodation $accommodation): self
    {
        if ($this->accommodations->removeElement($accommodation)) {
            $accommodation->removeService($this);
        }

        return $this;
    }
}
