<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Professionalqualification;
use App\Http\Resources\ProfessionalqualificationResource;

class ProfessionalqualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return ProfessionalqualificationResource::collection($user->professionalqualifications);
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
     * @param  \App\Model\Professionalqualification  $professionalqualification
     * @return \Illuminate\Http\Response
     */
    public function show(Professionalqualification $professionalqualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Professionalqualification  $professionalqualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Professionalqualification $professionalqualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Professionalqualification  $professionalqualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professionalqualification $professionalqualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Professionalqualification  $professionalqualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professionalqualification $professionalqualification)
    {
        //
    }
}
