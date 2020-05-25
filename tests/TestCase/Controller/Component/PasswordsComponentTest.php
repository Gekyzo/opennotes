<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\PasswordsComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\PasswordsComponent Test Case
 */
class PasswordsComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\PasswordsComponent
     */
    protected $Passwords;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Passwords = new PasswordsComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Passwords);

        parent::tearDown();
    }
}
