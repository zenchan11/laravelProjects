<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'just index man';

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return 'this portion is create';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return 'this portion is store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return 'this portino is show';

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
        return 'this portion is destroy';
    }
}
