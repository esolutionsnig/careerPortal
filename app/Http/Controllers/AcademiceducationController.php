<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Academiceducation;
use App\Http\Resources\AcademiceducationResource;

class AcademiceducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return AcademiceducationResource::collection($user->academiceducations);
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
     * @param  \App\Model\Academiceducation  $academiceducation
     * @return \Illuminate\Http\Response
     */
    public function show(Academiceducation $academiceducation)
    {
        return new AcademiceducationResource($academiceducation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Academiceducation  $academiceducation
     * @return \Illuminate\Http\Response
     */
    public function edit(Academiceducation $academiceducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Academiceducation  $academiceducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Academiceducation $academiceducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Academiceducation  $academiceducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academiceducation $academiceducation)
    {
        //
    }
}
