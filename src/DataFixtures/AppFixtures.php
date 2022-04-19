<?php

namespace App\DataFixtures;

Use App\Entity\User;
Use App\Entity\Formation;
Use App\Entity\Section;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Utilisation Faker
        $faker = Factory::create('fr_FR');

        //USER
        $user = new User();

        $user ->setEmail('user@test.com')
              ->setRoles(array('formateur'));

        $password = $this->hasher->hashPassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        //Formation
        for ($i=0; $i < 10; $i++) {
            $formation = new Formation();

            $formation  ->setTitre($faker->words(3,true))
                        ->setSection(array($faker->randomFloat(0,10,9999)))
                        ->setDescription($faker->text())
                        ->setPhotoPF('/images/formation.png');

            $manager->persist($formation);
        }

        //Section
        for ($i=0; $i < 10; $i++) {
            $section = new Section();

            $section -> setTitre($faker->words(3, true))
                     -> setContent1($faker->text())
                     -> setPhoto1('/images/test1.png')
                     -> setContent2($faker->text())
                     -> setPhoto2('/images/test2.png')
                     -> setVideo('/images/test.mp4')
                     -> setConclusion($faker->text());

            $manager -> persist($section);
        
        }    

        $manager->flush();
    }
}
