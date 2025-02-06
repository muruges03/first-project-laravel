<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class vendorcontroller extends Controller
{
   public function generate_vendor(Request $request){
    $vender = Vendor::factory()->create();
   }
}
