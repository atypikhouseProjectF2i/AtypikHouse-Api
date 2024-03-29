<?php

namespace App\DataFixtures;

use App\Entity\Accommodation;
use App\Entity\Activity;
use App\Entity\Equipement;
use App\Entity\Region;
use App\Entity\Service;
use App\Entity\ServiceAcco;
use App\Entity\TypeAccommodation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // creation de 3 USERS
        $collection_user = [];
        for ($i = 0; $i < 3; $i++) {
            $user = new User();
            $user->setEmail('user' . $i . '@gmail.com');
            $user->setName('username' . $i);
            $user->setFirstname('userfirstname' . $i);
            $user->setNewsletter(true);
            $user->setPassword('$2y$13$rOqijlykKvQ5vWBDQVpuKOx/NRowZ3X9cYfals5vV/hxwoX55iuOO');
            $user->setPhone('06242545649' . $i);
            $user->setRoles(['ROLE_ADMIN']);
            $manager->persist($user);
            array_push($collection_user, $user);
        }

        // creation de type d'hébergements
        $type_accommodation_tab = ["cabane", "tente", "roulotte", "bulle", "dôme", "yourte", "tipi", "nid"];
        $collection_type_accommodation = [];
        for ($i = 0; $i < count($type_accommodation_tab); $i++) {
            $type_accommodation = new TypeAccommodation();
            $type_accommodation->setName($type_accommodation_tab[$i]);
            $manager->persist($type_accommodation);
            array_push($collection_type_accommodation, $type_accommodation);
        }

        //creation région 
        $region_tab = ["Île-de-France", "Centre-Val de Loire", "Bourgogne-Franche-Comté", "Normandie", "Hauts-de-France", "Grand Est", "Pays de la Loire", "Bretagne", "Nouvelle-Aquitaine", "Occitanie", "Auvergne-Rhône-Alpes", "Provence-Alpes-Côte d'Azur", "Corse"];
        $collection_region = [];
        for ($i = 0; $i < count($region_tab); $i++) {
            $region = new Region();
            $region->setName($region_tab[$i]);
            $manager->persist($region);
            array_push($collection_region, $region);
        }

        // ajout d'hebergements
        $collection_accommodation = [];
        for ($i = 0; $i < 50; $i++) {
            $accomodation = new Accommodation();
            $randomTypeAccommodation = rand(0, count($collection_type_accommodation) - 1);
            $randomRegion = rand(0, count($collection_region) - 1);
            $accomodation->setTypeAccommodation($collection_type_accommodation[$randomTypeAccommodation]);
            $randomUser = rand(0, count($collection_user) - 1);
            $accomodation->setUser($collection_user[$randomUser]);
            $accomodation->setName("name acco" . $i);
            $accomodation->setPrice(rand(150, 1000));
            $accomodation->setSurface(rand(50, 200));
            $accomodation->setDescription("description acco" . $i);
            $accomodation->setAddress($i . " allé de la cabane" . $i);
            $accomodation->setZipCode("20122");
            $accomodation->setCity("Cassis");
            $accomodation->setRegion($collection_region[$randomRegion]);
            $accomodation->setNbSleeping(rand(2, 8));
            $accomodation->setCapacityAdult(rand(2, 8));
            $accomodation->setCapacityChild(rand(2, 8));
            $manager->persist($accomodation);
            array_push($collection_accommodation, $accomodation);
        }

        // creation d'equipements
        $equipment_tab = ["wifi", "TV", "piscine", "lave linge", "sèche linge", "barbecue"];
        for ($i = 0; $i < count($equipment_tab); $i++) {
            $equipment = new Equipement();
            $equipment->setName($equipment_tab[$i]);
            $manager->persist($equipment);
        }

        // creation d'activités
        $activity_tab = ["randonnées", "karting", "quad", "parapente", "motocross", "musées", "accrobranches"];
        $collection_activity = [];
        for ($i = 0; $i < count($activity_tab); $i++) {
            $activity = new Activity();
            $activity->setName($activity_tab[$i]);
            $manager->persist($activity);
            array_push($collection_activity, $activity);
        }


        // creation de services
        $service_tab = ["petit-déjeuner", "ménage", "cuisinier"];
        for ($i = 0; $i < count($service_tab); $i++) {
            $service = new ServiceAcco();
            $service->setName($service_tab[$i]);
            $manager->persist($service);
        }

        $manager->flush();
    }
}
