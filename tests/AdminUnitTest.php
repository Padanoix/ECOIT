<?php

namespace App\Tests;

use App\Entity\Admin;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class AdminUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $admin = new Admin();
        $user = new User();

        $admin->setPseudo('truepseudo')
              ->setUser($user);


        $this->assertTrue($admin->getpseudo() === 'truepseudo');
        $this->assertTrue($admin->getUser() === $user);
    }

    public function testIsFalse()
    {
        $admin = new Admin();
        $user = new User();

        $admin->setPseudo('true@test.com')
              ->setUser($user);

        $this->assertFalse($admin->getPseudo() === 'falsepseudo');
        $this->assertFalse($admin->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $admin = new Admin();

        $this->assertEmpty($admin->getPseudo());
        $this->assertEmpty($admin->getUser());
    }
}
