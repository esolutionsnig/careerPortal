<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Professionalmembership;
use App\Http\Resources\ProfessionalmembershipResource;

class ProfessionalmembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return ProfessionalmembershipResource::collection($user->professionalmemberships);
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
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function show(Professionalmembership $professionalmembership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function edit(Professionalmembership $professionalmembership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professionalmembership $professionalmembership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professionalmembership $professionalmembership)
    {
        //
    }
}
