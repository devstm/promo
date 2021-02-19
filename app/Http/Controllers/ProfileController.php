<?php

namespace App\Http\Controllers;

use App\Models\Craftsman;
use App\Models\Location;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('craftsman.create-profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('kt_user_add_user_avatar')->store('/public/images');
        $profile = new Profile();
        $profile->craftsman_id = $request->craftsmanId;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->martial_status = $request->martial_status;
        $profile->image_path = $image;
        $profile->description = $request->description;
        $profile->phone = $request->phone;
        $profile->contact = $request->contact;
        $profile->save();
        return back()->with('success', 'profile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Profile $profile
     * @return Request
     */
    public function edit(Craftsman $profile)
    {
        $page = Profile::whereCraftsmanId($profile->id)->get();
        return $page;
        //يظهر واجهة تعديل الملف الشخصي مع البيانات المراد تعديلها
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $page = Profile::whereCraftsmanId($profile->id)->get();
        if ($page) {
            $page->fill($request->only($page->getFillable()))->update();
            return back()->with('success', 'profile updated successfully.');
        } else {
            $profile = new Profile();
            $profile->fill($request->only($profile->getFillable()))->save();
            return back()->with('success', 'profile created successfully.');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
