<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;

class RolesController extends AbstractController
{

    public function __construct(private Security $security)
    {
    }


    public function __invoke()
    {
        $roles = $this->security->getUser()->getRoles();
        return $roles;
    }
}
