<?php

namespace Command\Controller;

use Pimf\Cli\Std;
use Pimf\Controller\Base;

class Account extends Base
{
    public function createCliAction()
    {
        $std = new Std();

        $first_name = $std->read('your first name', "/^[a-zA-Z'. -]+$/");
        $last_name  = $std->read('your last name', "/^[a-zA-Z'. -]+$/");
        $age        = $std->read('your age', '/^[0-9]+$/');

        printf(
            'Hello %s %s. You`re %d years old. Welcome to PIMF!'.PHP_EOL,
            $first_name, $last_name, $age
        );
    }

    /**
     * A index action - this is a framework restriction!
     */
    public function indexAction()
    {
        $this->createCliAction();
    }
    /**
     * A index action - this is a framework restriction!
     */
    public function indexCliAction()
    {
        $this->createCliAction();
    }
}