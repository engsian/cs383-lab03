<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('site.home', [
            'now' => time(), 
            'page' => 'home',
        ]);
    }

    public function product() 
    {
        return view('site.product', ['now' => time(), 'page' => 'product']);
    }

    public function price() 
    {
        return view('site.price', ['now' => time(), 'page' => 'price']);
    }

    public function contact() 
    {
        return view('site.contact', ['now' => time(), 'page' => 'contact']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
