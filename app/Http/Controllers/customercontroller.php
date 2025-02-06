<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;
class customercontroller extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone_number' => 'required|string|max:20',
        ], [
            'name.required' => 'The name field is mandatory.',
            'email.required' => 'We need your email address.',
            'email.unique' => 'This email is already in use.',
            'phone_number.required' => 'Phone number is required.',
        ]);

        $customer = Customer::create($validatedData);

        return redirect()->back()->with('success','');
    }

}
