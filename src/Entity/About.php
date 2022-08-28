<?php

namespace App\Entity;

use ApiPlatform\Core\Action\NotFoundAction;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AboutRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AboutRepository::class)]
#[ApiResource(
    collectionOperations: [
        "get" =>  [
            'controller' => NotFoundAction::class,
            'openapi_context' => ['summary' => 'hidden'],
            'read' => false,
            'output' => false
        ],
        "post" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ],
    ],
    itemOperations: [
        "get",
        "put" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ],
        'delete' => [
            'security' => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ]
    ],
    normalizationContext: ['groups' => ['about:read']],
    denormalizationContext: ['groups' => ['about:write']]
)]
class About
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['about:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['about:read', 'about:write'])]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['about:read', 'about:write'])]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
