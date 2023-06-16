<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Services\Owner\CreateOwnerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CreateOwnerController extends Controller
{
    public function create()
    {
        return view('owner.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'occupation' => 'required',
                'cpf' => 'required'
            ]);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator->errors());
            }

            $createOwnerService = new CreateOwnerService($request);
            
            $saveOwner = $createOwnerService->execute();

            return Redirect::back()->with('success', 'New owner created');
        } catch (\Exception $error) {
            return Redirect::back()->withErrors(['cpf' => 'The cpf is already in use']);
        }
    }
}
