<?php

namespace App\Services\Owner;

use App\Repositories\OwnerRepository;
use App\Services\Interfaces\AbstractInterface;
use App\Services\Services;

class CreateOwnerService extends Services implements AbstractInterface
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
        try {
            $createOwner = $this->ownerRepository->create([
                'full_name' => $this->data->full_name,
                'occupation' => $this->data->occupation,
                'cpf' => $this->data->cpf
            ]);

            return $this->returnContent($createOwner, true);
        } catch (\Exception $error) {
            return $this->returnContent('The cpf is already in use', false, 400);
        }
    }
}
