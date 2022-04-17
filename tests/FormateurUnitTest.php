<?php

namespace App\Tests;

use App\Entity\Formateur;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class FormateurUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $formateur = new Formateur();
        $user = new User();

        $formateur->setNom('truenom')
                  ->setPrénom('trueprenom')
                  ->setPhotoPP('./Images/TruePP')
                  ->setDescription('truedescription')
                  ->setUser($user);


        $this->assertTrue($formateur->getNom() === 'truenom');
        $this->assertTrue($formateur->getPrénom() === 'trueprenom');
        $this->assertTrue($formateur->getPhotoPP() === './Images/TruePP');
        $this->assertTrue($formateur->getDescription() === 'truedescription');
        $this->assertTrue($formateur->getUser() === $user);
    }

    public function testIsFalse()
    {
        $formateur = new Formateur();
        $user = new User();

        $formateur->setNom('truenom')
                  ->setPrénom('trueprenom')
                  ->setPhotoPP('./Images/TruePP')
                  ->setDescription('truedescription')
                  ->setUser($user);

        $this->assertFalse($formateur->getNom() === 'falsenom');
        $this->assertFalse($formateur->getPrénom() === 'falseprenom');
        $this->assertFalse($formateur->getPhotoPP() === './Images/falsePP');
        $this->assertFalse($formateur->getDescription() === 'falsedescription');
        $this->assertFalse($formateur->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $formateur = new Formateur();

        $this->assertEmpty($formateur->getNom());
        $this->assertEmpty($formateur->getPrénom());
        $this->assertEmpty($formateur->getPhotoPP());
        $this->assertEmpty($formateur->getDescription());
        $this->assertEmpty($formateur->getUser());
    }
}
