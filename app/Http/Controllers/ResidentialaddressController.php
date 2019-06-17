<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Residentialaddress;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ResidentialaddressRequest;
use App\Http\Resources\ResidentialaddressResource;

class ResidentialaddressController extends Controller
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
        return ResidentialaddressResource::collection($user->residentialaddresses);
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
    public function store(ResidentialaddressRequest $request, User $user)
    {
        $residentialaddress = new Residentialaddress;
        $residentialaddress->user_id = $request->user_id;
        $residentialaddress->landmarks = $request->landmarks;
        $residentialaddress->residedntial_area = $request->residedntial_area;
        $residentialaddress->house_number = $request->house_number;
        $residentialaddress->street_name = $request->street_name;
        $residentialaddress->suburb = $request->suburb;
        $residentialaddress->town = $request->town;
        $residentialaddress->district = $request->district;
        $residentialaddress->region = $request->region;
        $residentialaddress->past_residential_address = $request->past_residential_address;
        $residentialaddress->save();
        return response([
            'data' => new ResidentialaddressResource($residentialaddress)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Residentialaddress  $residentialaddress
     * @return \Illuminate\Http\Response
     */
    public function show(Residentialaddress $residentialaddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Residentialaddress  $residentialaddress
     * @return \Illuminate\Http\Response
     */
    public function edit(Residentialaddress $residentialaddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Residentialaddress  $residentialaddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Residentialaddress $residentialaddress)
    {
        $residentialaddress->update($request->all());
        return response([
            'data' => new ResidentialaddressResource($residentialaddress)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Residentialaddress  $residentialaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Residentialaddress $residentialaddress)
    {
        $residentialaddress->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
