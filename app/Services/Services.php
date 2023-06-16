<?php

namespace App\Services;

use App\Repositories\OwnerRepository;

class Services
{
    public function returnContent($data, $success = true, $statusCode = 201): array
    {
        return ['data' => $data, 'success' => $success, 'statusCode' => $statusCode];
    }
}