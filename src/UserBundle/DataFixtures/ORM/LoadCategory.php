<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 26/02/2016
 * Time: 09:34
 */

namespace src\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Category;


class LoadCategory implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie = array("Anglais L1","Anglais L2", "Anglais L3", "Anglais M1", "Anglais M2",
            "Math L1", "Math L2", "Math L3", "Math M1", "Math M2", "Physique L1", "Physique L2",
            "Physique L3", "Physique M1", "Physique M2", "Science de l'Ingénieur L1", "Science de
             l'Ingénieur L2", "Science de l'Ingénieur L3", "Science de l'Ingénieur M1", "Science
             de l'Ingénieur M2");
        foreach($categorie as $item)
        {
            $categorieToAdd = new Category();
            $categorieToAdd->setName($item);

            $manager->persist($categorieToAdd);
        }
        $manager->flush();
    }
}