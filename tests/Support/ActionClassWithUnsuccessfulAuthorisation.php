<?php

namespace Ninthspace\Action\Tests\Support;

use Ninthspace\Action\Action;

class ActionClassWithUnsuccessfulAuthorisation extends Action
{
    public function authorise()
    {
        return false;
    }

    public function handle()
    {
        return 123;
    }
}
