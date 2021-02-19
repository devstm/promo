<?php

namespace App\Http\Controllers\Craftsman;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Craftsman;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('craftsman.auth:craftsman');
    }

    /**
     * Show the Craftsman dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
            $id = auth('craftsman')->user()->id;
            $data = Craftsman::findOrFail($id);
            return view('craftsman.home', compact('data'));


    }
}
