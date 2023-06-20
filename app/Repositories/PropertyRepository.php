<?php

namespace App\Repositories;

use App\Models\Owner;
use App\Models\Property;

class PropertyRepository
{
    private Property $propertiesModel;
    private OwnerRepository $ownerRepository;

    public function __construct()
    {
        $this->propertiesModel = new Property();    
        $this->ownerRepository = new OwnerRepository();
    }

    public function list()
    {
        $data = $this->propertiesModel->with('owner')->get();
        return $data;
    }

    public function create($data)
    {
        $create = $this->propertiesModel->create($data);
        return $create->save();
    }
}