<?php

namespace App\Services\Owner;

use App\Repositories\OwnerRepository;
use App\Services\Interfaces\AbstractInterface;

class CreateOwnerService implements AbstractInterface
{
    private $data;
    private OwnerRepository $ownerRepository;

    public function __construct($data)
    {
        $this->data = $data;
        $this->ownerRepository = new OwnerRepository();
    }

    public function execute()
    {
        return $this->ownerRepository->create([
            'full_name' => $this->data->full_name,
            'occupation' => $this->data->occupation,
            'cpf' => $this->data->cpf
        ]);
    }
}
