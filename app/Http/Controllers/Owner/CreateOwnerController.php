<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Services\Owner\CreateOwnerService;
use Illuminate\Http\Request;

class CreateOwnerController extends Controller
{
    public function create()
    {
        return view('owner.create');
    }

    public function store(Request $request) {
        $createOwnerService = new CreateOwnerService($request);
        return $createOwnerService->execute();
    }
}
