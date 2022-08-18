<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ActivityRepository::class)]
#[ApiResource(
    attributes: ["pagination_enabled" => false],
    denormalizationContext: ['groups' => ['activity:write']],
    collectionOperations: [
        'get' => [
            'normalization_context' => ['groups' => ['activity:read']]
        ],
        'post' => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
        ]
    ],
    itemOperations: [
        "get"  => [
            'normalization_context' => ['groups' => ['activity:read']]
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
)]
class Activity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['activity:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['activity:read', 'accommodation:read', 'activity:write'])]
    private $name;

    #[ORM\ManyToMany(targetEntity: Accommodation::class, mappedBy: 'activity')]
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
            $accommodation->addActivity($this);
        }

        return $this;
    }

    public function removeAccommodation(Accommodation $accommodation): self
    {
        if ($this->accommodations->removeElement($accommodation)) {
            $accommodation->removeActivity($this);
        }

        return $this;
    }
}
