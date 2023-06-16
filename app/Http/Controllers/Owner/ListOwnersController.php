<?php
namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Services\Owner\ListOwnersService;

class ListOwnersController extends Controller
{
    public function show()
    {
        return view('owner.list', ['owners' => $this->listOwners()]);
    }

    private function listOwners()
    {
        $listOwnersService = new ListOwnersService();

        return $listOwnersService->execute();
    }
}