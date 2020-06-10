<?php

namespace Ninthspace\Action\Traits;

use Ninthspace\Action\Exceptions\AuthorisationException;

trait ResolvesAuthorisation
{
    protected function resolveAuthorisation(...$args)
    {
        if (! $this->passesAuthorisation(...$args)) {
            $this->failedAuthorisation();
        }

        return $this;
    }

    public function passesAuthorisation(...$args)
    {
        if (method_exists($this, 'authorize')) {
            return $this->authorize(...$args);
        }

        if (method_exists($this, 'authorise')) {
            return $this->authorise(...$args);
        }

        return true;
    }

    protected function failedAuthorisation()
    {
        throw new AuthorisationException('This action is unauthorised.');
    }
}
