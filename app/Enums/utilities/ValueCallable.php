<?php

namespace App\Enums\utilities;

trait ValueCallable
{
    public function value(): mixed
    {
        return $this->value;
    }
}
