<?php

namespace App\Services\Business;

interface BusinessServiceInterface
{
    public function findBySlug(string $slug);

    public function findByDomain(string $domain);
}
