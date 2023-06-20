<?php

namespace App\Services\Property;

use App\Repositories\OwnerRepository;
use App\Repositories\PropertyRepository;
use App\Services\Interfaces\AbstractInterface;
use App\Services\Services;

class CreatePropertyService extends Services implements AbstractInterface
{
    private $data;
    private PropertyRepository $propertyRepository;
    private OwnerRepository $ownerRepository;

    public function __construct($data)
    {
        $this->data = $data;
        $this->propertyRepository = new PropertyRepository();
        $this->ownerRepository = new OwnerRepository();
    }

    public function execute()
    {
        try {
            $imageName = time() . '.' . $this->data->image->extension();

            $createProperty = $this->propertyRepository->create([
                'title' => $this->data->title,
                'image' => $imageName,
                'street' => $this->data->street,
                'number' => $this->data->number,
                'reference' => $this->data->reference,
                'city' => $this->data->city,
                'state' => $this->data->state,
                'zip_code' => $this->data->zip_code,
                'owner_id' => $this->data->owner
            ]);

            $this->data->image->move(public_path('images'), $imageName);

            return $this->returnContent($createProperty, true);
        } catch (\Exception $error) {
            var_dump($error);
            return $this->returnContent('Ocurred a error when create the property', false, 400);
        }
    }
}
