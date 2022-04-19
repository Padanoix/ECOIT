<?php

namespace App\Tests;

use App\Entity\Formation;
use App\Entity\Section;
use PHPUnit\Framework\TestCase;

class FormationUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $formation = new Formation();
        $section = new Section();

        $formation->setTitre('truetitre')
                  ->setSection(array("truesections","truesection2"))
                  ->setDescription('truedescription')
                  ->setPhotoPF('./Images/truePhotoPF');


        $this->assertTrue($formation->gettitre() === 'truetitre');
        $this->assertTrue($formation->getSection() === array("truesections","truesection2"));
        $this->assertTrue($formation->getDescription() === 'truedescription');
        $this->assertTrue($formation->getPhotoPF() === './Images/truePhotoPF');
    }

    public function testIsFalse()
    {
        $formation = new Formation();
        $section = new Section();

        $formation->setTitre('truetitre')
                  ->setSection(array("truesections","truesection2"))
                  ->setDescription('truedescription')
                  ->setPhotoPF('./Images/truePhotoPF');

        $this->assertFalse($formation->getTitre() === 'falsetitre');
        $this->assertFalse($formation->getSection() === array("falsesections","falsesection2"));
        $this->assertFalse($formation->getDescription() === 'falsedescription');
        $this->assertFalse($formation->getPhotoPF() === './Images/falsePhotoPF');
    }

    public function testIsEmpty()
    {
        $formation = new Formation();

        $this->assertEmpty($formation->getTitre());
        $this->assertEmpty($formation->getSection());
        $this->assertEmpty($formation->getDescription() );
        $this->assertEmpty($formation->getPhotoPF());
    }
}
