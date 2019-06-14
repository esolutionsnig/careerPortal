<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Residentialaddress;
use App\Http\Resources\ResidentialaddressResource;

class ResidentialaddressController extends Controller
{
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, Residentialaddress $residentialaddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Residentialaddress  $residentialaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residentialaddress $residentialaddress)
    {
        //
    }
}
