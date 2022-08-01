<?php

namespace App\Entity;

use ApiPlatform\Core\Action\NotFoundAction;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\MeController;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource(
    security: 'is_granted("ROLE_USER")',
    normalizationContext: ['groups' => ['user:read']],
    collectionOperations: [
        'get' => [
            'security' => "is_granted('ROLE_ADMIN')"
        ],
        'post' => [
            'security' => "is_granted('PUBLIC_ACCESS')",
            'denormalization_context' => ['groups' => ['user:post']],
        ]
    ],
    itemOperations: [
        'get' => [
            'controller' => NotFoundAction::class,
            'openapi_context' => ['summary' => 'hidden'],
            'read' => false,
            'output' => false
        ],
        'me' => [
            'pagination_enabled' => false,
            'path' => '/me',
            'method' => 'get',
            'controller' => MeController::class,
            'read' => false,
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ],
        'put' => [
            'security' => "is_granted('ROLE_ADMIN') or object.getUserIdentifier() == user",
            'denormalization_context' => ['groups' => ['user:put']],
        ],
        'delete' => [
            'security' => "is_granted('ROLE_ADMIN')",
        ]
    ],
)]
#[UniqueEntity('email')]
class User  implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'readBooking'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['user:read', 'user:put', 'user:post'])]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['user:read', 'user:put', 'user:post'])]
    private $firstname;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['user:read', 'user:put', 'user:post'])]
    #[Assert\Email]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['user:put', 'user:post'])]
    private $password;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['user:read', 'user:put', 'user:post'])]
    private $phone;

    #[ORM\Column(type: 'boolean')]
    #[Groups(['user:read', 'user:put', 'user:post'])]
    private $newsletter;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Review::class)]
    private $reviews;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Accommodation::class)]
    private $accommodations;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Booking::class)]
    private $bookings;

    #[ORM\Column(type: 'json')]
    #[Groups(['user:read'])]
    //#[ApiProperty(security: "is_granted('ROLE_ADMIN')")]
    private $roles = [];

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
        $this->accommodations = new ArrayCollection();
        $this->bookings = new ArrayCollection();
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function isNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(bool $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setUser($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getUser() === $this) {
                $review->setUser(null);
            }
        }

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
            $accommodation->setUser($this);
        }

        return $this;
    }

    public function removeAccommodation(Accommodation $accommodation): self
    {
        if ($this->accommodations->removeElement($accommodation)) {
            // set the owning side to null (unless already changed)
            if ($accommodation->getUser() === $this) {
                $accommodation->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Booking>
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Booking $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setUser($this);
        }

        return $this;
    }

    public function removeBooking(Booking $booking): self
    {
        if ($this->bookings->removeElement($booking)) {
            // set the owning side to null (unless already changed)
            if ($booking->getUser() === $this) {
                $booking->setUser(null);
            }
        }

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
