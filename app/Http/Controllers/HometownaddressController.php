<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Hometownaddress;
use App\Http\Requests\HometownaddressRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\HometownaddressResource;

class HometownaddressController extends Controller
{
    /**
     * Add Middleware to prevent unauthenticated users 
     * from Storing, Updateing of Deleting a record
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return HometownaddressResource::collection($user->hometownaddresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HometownaddressRequest $request, User $user)
    {
        $hometownaddress = new Hometownaddress;
        $hometownaddress->user_id = $request->user_id;
        $hometownaddress->landmarks = $request->landmarks;
        $hometownaddress->residential_area = $request->residential_area;
        $hometownaddress->house_number = $request->house_number;
        $hometownaddress->street_name = $request->street_name;
        $hometownaddress->suburb = $request->suburb;
        $hometownaddress->town = $request->town;
        $hometownaddress->district = $request->district;
        $hometownaddress->home_phone = $request->home_phone;
        $hometownaddress->save();
        return response([
            'data' => new HometownaddressResource($hometownaddress)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Hometownaddress  $hometownaddress
     * @return \Illuminate\Http\Response
     */
    public function show(Hometownaddress $hometownaddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Hometownaddress  $hometownaddress
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometownaddress $hometownaddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Hometownaddress  $hometownaddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user, Hometownaddress $hometownaddress)
    {
        $hometownaddress->update($request->all());
        return response([
            'data' => new HometownaddressResource($hometownaddress)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Hometownaddress  $hometownaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Hometownaddress $hometownaddress)
    {
        $hometownaddress->delete();
        return response(null, Response::HTTP_CREATED);
    }
}
