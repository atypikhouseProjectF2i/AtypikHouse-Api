<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Security;

class ResetPasswordController extends AbstractController
{

    public function __invoke(Security $security, Request $request,  UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $content = json_decode($request->getContent());
        $user = $security->getUser();
        $hashOldPassword = $userPasswordHasherInterface->isPasswordValid($user, $content->oldPassword);

        if ($hashOldPassword) {
            $user->setPassword(
                $userPasswordHasherInterface->hashPassword($user, $content->newPassword)
            );
            return $user;
        } else {
            throw new HttpException(403, "Invalid old password");
        }
    }
}
