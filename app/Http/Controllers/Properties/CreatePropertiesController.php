<?php

namespace App\Http\Controllers\Properties;

use App\Services\Owner\ListOwnersService;
use App\Services\Property\CreatePropertyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CreatePropertiesController
{
    public function create()
    {
        return view('properties.create', ['owners' => $this->getOwners()]);
    }

    public function store(Request $request)
    {
        var_dump($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'street' => 'required|string',
            'number' => 'required',
            'reference' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required',
            'owner' => 'required|string'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }

        $createPropertyService = new CreatePropertyService($request);
        $saveProperty = $createPropertyService->execute();

        if (!$saveProperty['success']) {
            return Redirect::back()->withErrors(['error' => $saveProperty['data']]);
        }

        return Redirect::back()->with('success', 'New property created');
    }

    private function getOwners()
    {
        $ownersService = new ListOwnersService();
        return $ownersService->execute();
    }
}
