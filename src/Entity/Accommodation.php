<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use App\Repository\AccommodationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Controller\AccommodationImagesController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\Entity(repositoryClass: AccommodationRepository::class)]
#[Vich\Uploadable]

#[ApiResource(
    collectionOperations: [
        "get",
        "post" => [
            "security_post_denormalize" => "is_granted('ROLE_USER')",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ],
    ],
    itemOperations: [
        "get" => ['groups' => ['accommodation:read']],
        "put" => [
            "security_post_denormalize" => "is_granted('ROLE_ADMIN') or object.getUser() == user",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ],
        "images" => [
            'method' => 'POST',
            'path' => 'accommodations/{id}/images',
            'deserialize' => false,
            "security_post_denormalize" => "is_granted('ROLE_ADMIN') or object.getUser() == user",
            'controller' => AccommodationImagesController::class,
            'openapi_context' => [
                'requestBody' => [
                    'content' => [
                        'multipart/form-data' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'file' => [
                                        'type' => 'string',
                                        'format' => 'binary'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'delete' => [
            'security' => "is_granted('ROLE_ADMIN') or object.getUser() == user",
            'openapi_context' => [
                'security' => [['bearerAuth' => []]]
            ],
        ]
    ],
    subresourceOperations: [
        'api_users_accommodations_get_subresource' => [
            'security' => "is_granted('ROLE_ADMIN') or user.getId() == id",
        ],
    ],
    attributes: ["pagination_client_enabled" => true],
    denormalizationContext: ['groups' => ['accommodation:write']],
    normalizationContext: ['groups' => ['accommodation:read']],
)]
class Accommodation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'review:write', 'booking:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['accommodation:read', 'accommodation:write', 'booking:read'])]
    private $name;

    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $price;

    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $surface;

    #[ORM\Column(type: 'text')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $address;

    #[ORM\Column(type: 'string', length: 20)]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $zipCode;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $city;

    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $nbSleeping;

    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $capacityAdult;

    #[ORM\Column(type: 'integer')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $capacityChild;

    #[ORM\ManyToMany(targetEntity: Equipement::class, inversedBy: 'accommodations')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $equipement;

    #[ORM\ManyToMany(targetEntity: ServiceAcco::class, inversedBy: 'accommodations')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private Collection $serviceAcco;

    #[ORM\ManyToMany(targetEntity: Activity::class, inversedBy: 'accommodations')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $activity;

    #[ORM\ManyToOne(targetEntity: TypeAccommodation::class, inversedBy: 'accommodations')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $typeAccommodation;

    #[ORM\OneToMany(mappedBy: 'accommodation', targetEntity: Availablity::class)]
    private $availablities;

    #[ORM\OneToMany(mappedBy: 'accommodation', targetEntity: Review::class)]
    #[Groups(['accommodation:read'])]
    private $reviews;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'accommodations')]
    #[Groups(['accommodation:read', 'accommodation:write'])]
    private $user;

    #[ORM\OneToMany(mappedBy: 'accommodation', targetEntity: Booking::class)]
    private $bookings;

    #[ORM\ManyToOne(targetEntity: Region::class, inversedBy: 'accommodations')]
    #[Groups(['accommodation:read', 'accommodation:write', 'booking:read'])]
    private $region;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imagesPath;

    /**
     * @var Array|null
     */
    #[Vich\UploadableField(mapping: 'accommodation_images', fileNameProperty: 'imagesPath')]
    private $file;

    /**
     * @var string|null
     */
    #[Groups(['accommodation:read', 'booking:read'])]
    private $imageUrl;


    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updateAt;




    public function __construct()
    {
        $this->equipement = new ArrayCollection();
        $this->activity = new ArrayCollection();
        $this->availablities = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->bookings = new ArrayCollection();
        $this->serviceAcco = new ArrayCollection();
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }


    public function getNbSleeping(): ?int
    {
        return $this->nbSleeping;
    }

    public function setNbSleeping(int $nbSleeping): self
    {
        $this->nbSleeping = $nbSleeping;

        return $this;
    }

    public function getCapacityAdult(): ?int
    {
        return $this->capacityAdult;
    }

    public function setCapacityAdult(int $capacityAdult): self
    {
        $this->capacityAdult = $capacityAdult;

        return $this;
    }

    public function getCapacityChild(): ?int
    {
        return $this->capacityChild;
    }

    public function setCapacityChild(int $capacityChild): self
    {
        $this->capacityChild = $capacityChild;

        return $this;
    }

    /**
     * @return Collection<int, Equipement>
     */
    public function getEquipement(): Collection
    {
        return $this->equipement;
    }

    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipement->contains($equipement)) {
            $this->equipement[] = $equipement;
        }

        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        $this->equipement->removeElement($equipement);

        return $this;
    }


    /**
     * @return Collection<int, Activity>
     */
    public function getActivity(): Collection
    {
        return $this->activity;
    }

    public function addActivity(Activity $activity): self
    {
        if (!$this->activity->contains($activity)) {
            $this->activity[] = $activity;
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        $this->activity->removeElement($activity);

        return $this;
    }

    public function getTypeAccommodation(): ?TypeAccommodation
    {
        return $this->typeAccommodation;
    }

    public function setTypeAccommodation(?TypeAccommodation $typeAccommodation): self
    {
        $this->typeAccommodation = $typeAccommodation;

        return $this;
    }

    /**
     * @return Collection<int, Availablity>
     */
    public function getAvailablities(): Collection
    {
        return $this->availablities;
    }

    public function addAvailablity(Availablity $availablity): self
    {
        if (!$this->availablities->contains($availablity)) {
            $this->availablities[] = $availablity;
            $availablity->setAccommodation($this);
        }

        return $this;
    }

    public function removeAvailablity(Availablity $availablity): self
    {
        if ($this->availablities->removeElement($availablity)) {
            // set the owning side to null (unless already changed)
            if ($availablity->getAccommodation() === $this) {
                $availablity->setAccommodation(null);
            }
        }

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
            $review->setAccommodation($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getAccommodation() === $this) {
                $review->setAccommodation(null);
            }
        }

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
            $booking->setAccommodation($this);
        }

        return $this;
    }

    public function removeBooking(Booking $booking): self
    {
        if ($this->bookings->removeElement($booking)) {
            // set the owning side to null (unless already changed)
            if ($booking->getAccommodation() === $this) {
                $booking->setAccommodation(null);
            }
        }

        return $this;
    }

    public function getRegion(): ?region
    {
        return $this->region;
    }

    public function setRegion(?region $region): self
    {
        $this->region = $region;

        return $this;
    }



    /**
     * @return  File|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param  File|null $file  
     */
    public function setFile(File $file): Accommodation
    {
        $this->file = $file;

        return $this;
    }

    public function getImagesPath(): ?string
    {
        return $this->imagesPath;
    }

    public function setImagesPath(?string $imagesPath): self
    {
        $this->imagesPath = $imagesPath;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get the value of imageUrl
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set the value of imageUrl
     *
     * @return  self
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return Collection<int, ServiceAcco>
     */
    public function getServiceAcco(): Collection
    {
        return $this->serviceAcco;
    }

    public function addServiceAcco(ServiceAcco $serviceAcco): self
    {
        if (!$this->serviceAcco->contains($serviceAcco)) {
            $this->serviceAcco->add($serviceAcco);
        }

        return $this;
    }

    public function removeServiceAcco(ServiceAcco $serviceAcco): self
    {
        $this->serviceAcco->removeElement($serviceAcco);

        return $this;
    }
}
