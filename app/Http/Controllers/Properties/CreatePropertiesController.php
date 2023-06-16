<?php

namespace App\Http\Controllers\Properties;

use App\Services\Owner\ListOwnersService;

class CreatePropertiesController
{
    public function create()
    {
        return view('properties.create', ['owners' => $this->getOwners()]);
    }

    private function getOwners()
    {
        $ownersService = new ListOwnersService();
        return $ownersService->execute();
    }
}