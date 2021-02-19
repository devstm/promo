<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Crafts;
use Illuminate\Http\Request;

class CraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crafts::all();

        return view('crafts.crafts', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('crafts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crafts = new Crafts();
        $crafts->fill($request->only($crafts->getFillable()))->save();
        return back()->with('success', 'craft created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function show(Crafts $crafts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function edit(Crafts $craft)
    {
        return view('crafts.update',compact('craft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crafts $crafts)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crafts $crafts)
    {
        //
    }
}
