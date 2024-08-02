<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//    $test = Test::find(3);
//    $test = Test::OrderBy('meta_data->name')->get();
//    $test = Test::where('meta_data->address->city',"Khulna")->get();
//    $test = Test::where('meta_data->name','LIKE',"Sadid1%")->get();
   $test = Test::whereJsonContains('meta_data->name','Sadid3')->get();
   return $test;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new Test();
        // $test->meta_data = [
        //     'name'=>'Sadid',
        //     'email'=>'sadid@gmail.com',
        //     'mobile_number'=>'11223344'
        // ];
        // $test->save();
        // $test =  Test::create([
        //     'meta_data' => [
        //         'name' => 'Sadid3',
        //         'email' => 'sadid3@gmail.com',
        //         'mobile_number' => '11223377',
        //         "address" => [
        //             'street' => "#123 KK Road",
        //             'city' => 'Khulna',
        //             'country' => 'Bangladesh'
        //         ]
        //     ]
        // ]);

        // $test = Test::where('id',3)->update([
        //     'meta_data->address->city'=>'New City'
        // ]);
        $test = Test::where('id',3)->update([
            'meta_data->email'=>'sadid3@gmail.com'
        ]);
        //   $test = Test::find(3);
        //   $test->meta_data['name']= 'Sadid New';
        //   $test->save();

        // $test = Test::find(3);
        // $test->meta_data = collect($test->meta_data)->forget('email');
        // $test->save();
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
