<?php

declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Passwords component
 */
class PasswordsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function check($data)
    {
        $comparisonFields = ['password', 'password_repeated'];

        return ($data[$comparisonFields[0]] === $data[$comparisonFields[1]]) ? true : false;
    }
}
