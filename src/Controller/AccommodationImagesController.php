<?php

namespace App\Controller;

use App\Entity\Accommodation;
use Symfony\Component\HttpFoundation\Request;

class AccommodationImagesController
{
    public function __invoke(Request $request)
    {
        $accommodation = $request->attributes->get('data');
        if (!($accommodation instanceof Accommodation)) {
            throw new \RuntimeException('Hébergement attendu');
        }
        $accommodation->setFile($request->files->get('file'));
        $accommodation->setUpdateAt(new \DateTime());
        return $accommodation;
    }
}
