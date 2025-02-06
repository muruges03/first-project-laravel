<?php

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\vendorcontroller;
use App\Models\Customer;
use App\Models\Mine;
use App\Models\Order;
use App\Models\stoneType;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//1-7 routes
Route::get('/day1-7', function () {
    return view('components.day1_7');
});
Route::get('/day1-7', function () {
    return view('learn.day1-7routes.basicpage');
});
Route::get('/home', function () {
    return view('learn.day1-7routes.home');
});
Route::get('/contact', function () {
    return view('learn.day1-7routes.contact');
});
Route::get('/about', function () {
$user = User::first();
    return view('learn.day1-7routes.about', compact('user'));
});

//8-15 routes
Route::get('/day8-15', function () {
    return view('components.day8_15');
});
Route::get('/day8', function(){
    return view('learn.day8-15routes.day8');
});
Route::get('/day9', function(){
    $customers = Customer::paginate(1);
    return view('learn.day8-15routes.day9', compact('customers'));
});
Route::get('/day10', function(){
    $vendors = Vendor::simplepaginate(5);
    return view('learn.day8-15routes.day10', compact('vendors'));
});
Route::get('/day11', function(){
    $customers = Vendor::all();
    $orders = Order::with('customer')->get();
    $vendors = Vendor::all();
    return view('learn.day8-15routes.day11', compact('customers', 'orders', 'vendors'));
});
Route::get('/day12', function(){
    $mines =  Mine::with('stoneTypes')->get();
    $stoneTypes = stoneType::all();

    return view('learn.day8-15routes.day12', compact('mines', 'stoneTypes'));
});
Route::get('/day13', function(){
    $mines =  Mine::with('stoneTypes')->get();
    $stoneTypes = stoneType::all();

    return view('learn.day8-15routes.day13', [
        'mines' =>$mines,
        'stoneTypes' =>$stoneTypes
    ]);
});

Route::get('/day14', function(){

    $stoneTypes = stoneType::paginate(2);
    $mines = Mine::simplepaginate(2);
    $customers = Customer::cursorPaginate(1);
    return view('learn.day8-15routes.day14', [
        'mines' =>$mines,
        'stoneTypes' =>$stoneTypes,
        'customers'=>$customers
    ]);
});
Route::get('/day15', function(){
    return view('learn.day8-15routes.day15');
});


//Day 16-19 routes
Route::get('/day16-19', function () {
    return view('components.day16_19');
});
Route::get('/day16', function(){
    $customers = Customer::paginate(5);
    return view('learn.day16-19routes.day16' , compact('customers'));
});
Route::get('/day17', function(){
    $customers = Customer::paginate(5);
    return view('learn.day16-19routes.day17 ' , compact('customers'));
});
Route::get('/day18', function(){
    $customers = Customer::paginate(5);
    return view('learn.day16-19routes.day18 ' , compact('customers'));
});
Route::get('/day19', function(){
    $customers = Customer::paginate(5);
    return view('learn.day16-19routes.day19 ' , compact('customers'));
});


//crud operations


Route::post('/generate_vendor', [vendorcontroller::class, 'generate_vendor'])->name('generate_vendor');
Route::post('/store-orders', [ordercontroller::class, 'store'])->name('orders.store');
Route::post('/store-mine-stones', function(Request $request) {
    $mine = Mine::findOrFail($request->mine_id);
    $mine->stoneTypes()->sync($request->stone_types);
    return redirect()->back()->with('success', 'Stones assigned successfully!');
});
Route::get('/customer-edit/{id}', function($id){
    $customer = Customer::findOrFail($id);
    return view('learn.day16-19routes.day18-edit', compact('customer'));
})->name('customers.edit');
Route::put('/customer-update/{id}', function($id, Request $request) {
    $customer = Customer::findOrFail($id);
    $customer->update([
       'name'=> $request->name,
       'email'=> $request->email,
       'phone_number'=> $request->phone_number,
    ]);
    return redirect()->back()->with('success','customer update successfully');
})->name('customers.update');
Route::delete('/customer-delete/{id}', function($id){
    $customer = Customer::findOrFail($id);
    $customer->delete();
    return redirect()->back()->with('success','deleted sucessfully');
})->name('customers.delete');

//group controller
Route::controller(customercontroller::class)->group(function (){
    Route::post('/customers','store');
});



//Default dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
