<?php

namespace App\Tests;

use App\Entity\Student;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class StudentUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $student = new Student();
        $user = new User();

        $student->setPseudo('truepseudo')
                ->setSuiviFormation(1)
                ->setUser($user);


        $this->assertTrue($student->getpseudo() === 'truepseudo');
        $this->assertTrue($student->getSuiviFormation() === 1);
        $this->assertTrue($student->getUser() === $user);
    }

    public function testIsFalse()
    {
        $student = new Student();
        $user = new User();

        $student->setPseudo('truepseudo')
                ->setSuiviFormation(1)
                ->setUser($user);

        $this->assertFalse($student->getPseudo() === 'falsepseudo');
        $this->assertFalse($student->getSuiviFormation() === 2);
        $this->assertFalse($student->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $student = new Student();

        $this->assertEmpty($student->getPseudo());
        $this->assertEmpty($student->getSuiviFormation());
        $this->assertEmpty($student->getUser());
    }
}
