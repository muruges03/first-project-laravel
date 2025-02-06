<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required|integer',
            'vendor_id'   => 'required|integer',
            'rock_type'   => 'required|string',
            'status'      => 'required|string',
            'quantity'    => 'required|integer',
        ]);

        $order = Order::create($validatedData);

        // Return Response
        return redirect()->back()->with('success','order confirmed');
    }
}
