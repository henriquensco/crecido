<?php

namespace App\Services\Property;

use App\Repositories\PropertyRepository;
use App\Services\Interfaces\AbstractInterface;
use App\Services\Services;

class ListPropertiesService extends Services implements AbstractInterface
{
    private PropertyRepository $propertyRepository;

    public function __construct()
    {
        $this->propertyRepository = new PropertyRepository();
    }

    public function execute()
    {
        $data = $this->propertyRepository->list();
        return $this->returnContent(data: $data, statusCode: 200);
    }
}