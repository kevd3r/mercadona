<?php

use App\Entity\Admin;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminTest extends TestCase
{
    public function testGetEmail()
    {
        $admin = new Admin();
        $email = 'admin@example.com';
        $admin->setEmail($email);

        $this->assertEquals($email, $admin->getEmail());
    }

    public function testGetUserIdentifier()
    {
        $admin = new Admin();
        $email = 'admin@example.com';
        $admin->setEmail($email);

        $this->assertEquals($email, $admin->getUserIdentifier());
    }

    public function testGetRoles()
    {
        $admin = new Admin();
        $roles = ['ROLE_ADMIN'];
        $admin->setRoles($roles);

        $this->assertEquals($roles, $admin->getRoles());
    }

    public function testGetPassword()
    {
        $admin = new Admin();
        $password = 'password';
        $admin->setPassword($password);

        $this->assertEquals($password, $admin->getPassword());
    }

    public function testEraseCredentials()
    {
        $admin = new Admin();
        $admin->eraseCredentials();

        // No specific assertions, just verifying the method does not throw any errors
        $this->assertTrue(true);
    }
}
