<?php

namespace Ninthspace\Action\Tests\Support;

use Ninthspace\Action\Action;

class ActionClassWithSuccessfulAuthorisation extends Action
{
    public function authorise()
    {
        return true;
    }

    public function handle()
    {
        return 123;
    }
}
