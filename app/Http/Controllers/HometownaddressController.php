<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Hometownaddress;
use App\Http\Resources\HometownaddressResource;

class HometownaddressController extends Controller
{
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, Hometownaddress $hometownaddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Hometownaddress  $hometownaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometownaddress $hometownaddress)
    {
        //
    }
}
