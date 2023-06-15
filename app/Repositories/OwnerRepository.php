<?php

namespace App\Repositories;

use App\Models\Owner;

class OwnerRepository
{
    private Owner $ownerModel;

    public function __construct()
    {
        $this->ownerModel = new Owner();
    }

    public function create($data)
    {
        $create = $this->ownerModel->create($data);
        return $create->save();
    }
}