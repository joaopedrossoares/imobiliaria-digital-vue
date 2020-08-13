<?php

namespace App\Http\Controllers;

use App\PropertiesIndicated;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertiesIndicatedController extends Controller
{
    public function create(Request $request) {
        try {
            $id = Auth::id();
            $status = $request->status;
            $zipcode = $request->zip_code;
            $street = $request->street;
            $number = $request->number;
            $complement = $request->complement;
            $roles_id = 6;

            PropertiesIndicated::create([
                'status' => $status,
                'zip_code' => $zipcode,
                'street' => $street,
                'number' => $number,
                'complement' => $complement,
                'roles_id' => $roles_id,
                'users_id' => $id
            ]);

        } catch (\Exception $e) {
            Toastr::error($e);
        }
    }
}
