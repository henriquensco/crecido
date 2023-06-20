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

    public function list()
    {
        return $this->ownerModel->all();
    }

    public function find($id) {
        return $this->ownerModel->find($id);
    }

    public function create($data)
    {
        $create = $this->ownerModel->create($data);
        return $create->save();
    }
}