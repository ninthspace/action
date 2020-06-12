<?php

namespace Ninthspace\Action;

use Ninthspace\Action\Exceptions\AuthorisationException;
use Ninthspace\Action\Traits\ResolvesAuthorisation;

class Action
{
    use ResolvesAuthorisation;

    public function run(...$args)
    {
        $this->resolveAuthorisation(...$args);

        return $this->handle(...$args);
    }

    public function handle()
    {

    }
}
