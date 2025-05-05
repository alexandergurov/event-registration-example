<?php

namespace App\Service;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class UserProfile
 * @package App\Service
 */
class UserProfile
{
    private ?UserInterface $user;

    /**
     * UserProfile constructor.
     * @param Security $security
     */
    public function __construct(
        private readonly Security $security,
    )
    {
        $this->user = $this->security?->getUser();
    }

    /**
     * @return UserInterface|null
     */
    public function getUser(): ?UserInterface
    {
        return $this->user;
    }

    public function getUserRole(): ?array
    {
        return $this->user?->getRoles();
    }

    public function getUsername(): ?string
    {
        return $this->user?->getUsername();
    }

    public function isAdmin(): bool
    {
        $roles = $this->user?->getRoles();
        return in_array('ROLE_ADMIN', $roles) || in_array('ROLE_SUPER_ADMIN', $roles);
    }

    /**
     * @return string|null
     */
    public function getCurrentUserID(): ?string
    {
        return $this->user?->getUserIdentifier();
    }
}