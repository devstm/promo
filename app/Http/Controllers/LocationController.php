<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Crafts;
use App\Models\Craftsman;
use App\Models\Location;
use App\Models\neighborhoods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function create(Craftsman $user)
    {
        $city = City::all();
        $neighborhoods = neighborhoods::all();
        $data = [$city, $neighborhoods, $user];
        return view('locations.create', compact('data'));
    }

    public function store(Craftsman $user, Request $request)
    {
        //variables
        $id = $request->craftsmanId;
        $user = Craftsman::findOrFail($id);
        $city = $request->city_id;
        $neighborhood = $request->neighborhood_id;
        // find if location is exists
        $location = Location::whereCityId($city)->whereNeighborhoodId($neighborhood)->first();
        if ($location) {
            $location->craftsmen()->attach($user);
            return back()->with('success', 'Location is Added to your Locations successfully.');
        }
        else{
            $locat = new Location();
                $locat->fill($request->only($locat->getFillable()))->save();
                $locat->craftsmen()->attach($user);
                return back()->with('success', 'Add Location successfully.');
        }
//        $location = Location::where('city_id', '=', $request->city_id)->first();
//        if ($location) {
//            $new_locate = Location::where('neighborhood_id', '=', $request->neighborhood_id)->first();
//            if ($new_locate) {
//                $new_locate->craftsmen()->attach($user);
//                return back()->with('success', 'Add Location successfully.');
//            } else {
//                $locat = new Location();
//                $locat->fill($request->only($locat->getFillable()))->save();
//                $locat->craftsmen()->attach($user);
//                return back()->with('success', 'Add Location successfully.');
//            }
//        } else {
//            $locat = new Location();
//            $locat->fill($request->only($locat->getFillable()))->save();
//            $locat->craftsmen()->attach($user);
//            return back()->with('success', 'Add Location successfully.');
//        }
    }

    public
    function cuttentLocaation(Craftsman $user)
    {
        $data = Craftsman::findOrFail($user->id)->locations()->orderBy('id')->get();
        return view('craftsman.current-location', compact('data'));

    }

    public
    function destroy(Location $location)
    {
        if ($location->craftsmen()) {
            return back()->with('message', 'cant delete this record.');
        }
        Location::findOrFail($location->id)->delete();
        return redirect()->back()->with('success', 'deleted successfully');

    }


    public
    function fetch(Request $request)
    {
//        $select =$request->get('select');
//        $value =$request->get('value');
//        $dependent =$request->get('dependent');
//        $data = Neighborhoods::where($select, $value )->groupedBy($dependent)->get();

        if (!$request->country_id) {
            dd($request->country_id);
//            $html = '<option value="">' . trans('global.pleaseSelect') . '</option>';
        } else {
            $html = '';
            $cities = Neighborhoods::where('city_id', $request->country_id)->get();
            foreach ($cities as $city) {
                $html .= '<option value="' . $city->id . '">' . $city->name . '</option>';
//                return $city;
            }
        }

        return response()->json(['html' => $html]);
    }


    public
    function loc()
    {
        $user = Craftsman::find(1)->locations()->orderBy('id')->get();
//       foreach ($user->locations as $loc){
        return $user;
    }


//    }
}
