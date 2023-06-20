<?php
namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use App\Services\Property\ListPropertiesService;

class ListPropertiesController extends Controller
{
    public function show()
    {
        return view('properties.list', ['properties' => $this->listProperties()]);
    }

    private function listProperties()
    {
        $listPropertiesService = new ListPropertiesService();

        return $listPropertiesService->execute();
    }
}