<?php

namespace Ninthspace\Action\Tests\Support;

use Ninthspace\Action\Action;

class ActionClassWithSuccessfulAuthorization extends Action
{
    public function authorize()
    {
        return true;
    }

    public function handle()
    {
        return 123;
    }
}
