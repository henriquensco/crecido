<?php

namespace App\Services\Owner;

use App\Repositories\OwnerRepository;
use App\Services\Interfaces\AbstractInterface;
use App\Services\Services;

class ListOwnersService extends Services implements AbstractInterface
{
    public OwnerRepository $ownerRepository;
    
    public function __construct()
    {
        $this->ownerRepository = new OwnerRepository();
    }

    public function execute()
    {
        $data = $this->ownerRepository->list();

        return $this->returnContent(data: $data, statusCode: 200);
    }
}