<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Socialmembership;
use App\Http\Resources\SocialmembershipResource;

class SocialmembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return SocialmembershipResource::collection($user->socialmemberships);
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
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function show(Socialmembership $socialmembership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function edit(Socialmembership $socialmembership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socialmembership $socialmembership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socialmembership $socialmembership)
    {
        //
    }
}
