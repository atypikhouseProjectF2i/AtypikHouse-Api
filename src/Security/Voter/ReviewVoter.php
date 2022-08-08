<?php

namespace App\Security\Voter;

use App\Entity\Review;
use App\Entity\User;
use App\Repository\AccommodationRepository;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ReviewVoter extends Voter
{
    public const CREATE = 'COMMENT_CREATE';

    public function __construct(private AccommodationRepository $accommodationRepository)
    {
    }

    protected function supports(string $attribute, $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::CREATE])
            && $subject instanceof \App\Entity\Review;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof User) {
            return false;
        }

        if (!$subject instanceof Review) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::CREATE:
                $bookings = $this->accommodationRepository->findBookingsByAccommodationAndUser(
                    $subject->getAccommodation(),
                    $user,
                );
                return count($bookings) > 0;
            default:
                return false;
        }
    }
}
