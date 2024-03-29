<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
#[ApiResource(
    collectionOperations: [
        "post" => [
            'security_post_denormalize' => 'is_granted("COMMENT_CREATE", object)',
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ]
    ],
    denormalizationContext: ['groups' => ['review:write']],
)]

#[ApiFilter(SearchFilter::class, properties: ['accommodation.id' => 'exact'])]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    #[Groups(['accommodation:read', 'review:write'])]
    private $comment;

    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'review:write'])]
    private $score;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reviews')]
    #[Groups(['review:write'])]
    private $user;

    #[ORM\ManyToOne(targetEntity: Accommodation::class, inversedBy: 'reviews')]
    #[Groups(['review:write'])]
    private $accommodation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

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
