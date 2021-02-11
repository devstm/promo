<?php

namespace App\Http\Controllers;

use App\Models\Craftsman;
use Illuminate\Http\Request;

class CraftsmanController extends Controller
{
    public function edit(Craftsman $craftsman){
        $crafts  = auth('craftsman')->user();
//        $crafts = Craftsman::findOrFail($craftsman->id);
        return $crafts;
    }
}
