<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Articles;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0 ; $i < 10 ; $i++){
            $art = new Articles();
            $art->setTitre($faker->word);
            $art->setAuteur($faker->name);
            $art->setContenu($faker->sentence);
            $art->setDate($faker->dateTime);
            
            $manager->persist($art);
        }
        

        $manager->flush();
    }
}
