<?php

namespace App\Enums\utilities;

trait NameCallable
{
    public function name(): mixed
    {
        return $this->name;
    }

}
