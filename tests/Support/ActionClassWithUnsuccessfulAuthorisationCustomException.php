<?php

namespace Ninthspace\Action\Tests\Support;

use Ninthspace\Action\Action;

class ActionClassWithUnsuccessfulAuthorisationCustomException extends Action
{
    public $authorisationException = CustomException::class;

    public function authorise()
    {
        return false;
    }

    public function handle()
    {
        return 123;
    }
}
