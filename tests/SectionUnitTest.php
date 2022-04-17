<?php

namespace App\Tests;

use App\Entity\Section;
use App\Entity\Formation;
use PHPUnit\Framework\TestCase;

class SectionTest extends TestCase
{
    public function testIsTrue()
    {
        $section = new Section();
        $formation = new Formation();

        $section  ->setTitre('truetitre')
                  ->setContent1('truecontent1')
                  ->setPhoto1('./Images/Truephoto1')
                  ->setContent2('truecontent2')
                  ->setPhoto2('./Images/Truephoto2')
                  ->setVideo('./Images/Truevideo')
                  ->setConclusion('trueconclusion');

        $formation ->setSection(array("truesections","truesection2"));

 

        $this->assertTrue($section->getTitre() === 'truetitre');
        $this->assertTrue($section->getContent1() === 'truecontent1');
        $this->assertTrue($section->getPhoto1() === './Images/Truephoto1');
        $this->assertTrue($section->getContent2() === 'truecontent2');
        $this->assertTrue($section->getPhoto2() === './Images/Truephoto2');
        $this->assertTrue($section->getVideo() === './Images/Truevideo');
        $this->assertTrue($section->getConclusion() === 'trueconclusion');
        $this->assertTrue($formation->getSection() === array("truesections","truesection2"));
    }

    public function testIsFalse()
    {
        $section = new Section();
        $formation = new Formation();

        $section->setTitre('truetitre')
                ->setContent1('truecontent1')
                ->setPhoto1('./Images/Truephoto1')
                ->setContent2('truecontent2')
                ->setPhoto2('./Images/Truephoto2')
                ->setVideo('./Images/Truevideo')
                ->setConclusion('trueconclusion');
        $formation ->setSection(array("truesections","truesection2"));

        $this->assertFalse($section->getTitre() === 'falsetitre');
        $this->assertFalse($section->getContent1() === 'falsecontent1');
        $this->assertFalse($section->getPhoto1() === './Images/falsephoto1');
        $this->assertFalse($section->getContent2() === 'falsecontent2');
        $this->assertFalse($section->getPhoto2() === './Images/falsephoto2');
        $this->assertFalse($section->getVideo() === './Images/falsevideo');
        $this->assertFalse($section->getConclusion() === 'falseconclusion');
        $this->assertFalse($formation->getSection() === array("falsesections","falsesection2"));
    }

    public function testIsEmpty()
    {
        $section = new Section();
        $formation = new Formation();

        $this->assertEmpty($section->getTitre());
        $this->assertEmpty($section->getContent1());
        $this->assertEmpty($section->getPhoto1());
        $this->assertEmpty($section->getContent2());
        $this->assertEmpty($section->getPhoto2());
        $this->assertEmpty($section->getVideo());
        $this->assertEmpty($section->getConclusion());
        $this->assertEmpty($formation->getSection());
    }
}
