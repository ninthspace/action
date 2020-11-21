<?php

namespace Ninthspace\Action;

use Ninthspace\Action\Traits\ResolvesAuthorisation;

class Action
{
    use ResolvesAuthorisation;

    /**
     * @return mixed|null
     */
    public function run(...$args)
    {
        $this->resolveAuthorisation(...$args);

        return $this->handle(...$args);
    }
}
