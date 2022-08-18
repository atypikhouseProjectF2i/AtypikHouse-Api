<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EquipementRepository::class)]
#[ApiResource(
    itemOperations: [
        "get" => [
            "normalization_context" => ['groups' => ['equipement:read']]
        ],
        "put" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
            "denormalization_context" => ['groups' => ['equipement:write']]
        ],
        "delete" => [
            "security" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ],
    ],
    collectionOperations: [
        "get" => [
            'normalization_context' => ['groups' => ['equipement:read']]
        ],
        "post" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
            "denormalizetion_context" => ['groups' => ['equipement:write']],
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ]
        ],
    ]
)]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['equipement:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['equipement:write', 'equipement:read'])]
    private $name;

    #[ORM\ManyToMany(targetEntity: Accommodation::class, mappedBy: 'equipement')]
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
            $accommodation->addEquipement($this);
        }

        return $this;
    }

    public function removeAccommodation(Accommodation $accommodation): self
    {
        if ($this->accommodations->removeElement($accommodation)) {
            $accommodation->removeEquipement($this);
        }

        return $this;
    }
}
