<?php

namespace Ninthspace\Action\Tests\Support;

use Ninthspace\Action\Action;

class ActionClassWithAuthorisationParameters extends Action
{
    public function authorise($forceAuthorisationResult = true)
    {
        return $forceAuthorisationResult;
    }

    public function handle()
    {
        return 123;
    }
}
