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
                  ->setSection(array("truesections","truesection2"));


        $this->assertTrue($formation->gettitre() === 'truetitre');
        $this->assertTrue($formation->getSection() === array("truesections","truesection2"));
    }

    public function testIsFalse()
    {
        $formation = new Formation();
        $section = new Section();

        $formation->setTitre('truetitre')
                  ->setSection(array("truesections","truesection2"));

        $this->assertFalse($formation->getTitre() === 'falsetitre');
        $this->assertFalse($formation->getSection() === array("falsesections","falsesection2"));
    }

    public function testIsEmpty()
    {
        $formation = new Formation();

        $this->assertEmpty($formation->getTitre());
        $this->assertEmpty($formation->getSection());
    }
}
