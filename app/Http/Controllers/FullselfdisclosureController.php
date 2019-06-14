<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Fullselfdisclosure;
use App\Http\Resources\FullselfdisclosureResource;

class FullselfdisclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return FullselfdisclosureResource::collection($user->fullselfdisclosures);
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
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function show(Fullselfdisclosure $fullselfdisclosure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function edit(Fullselfdisclosure $fullselfdisclosure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fullselfdisclosure $fullselfdisclosure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fullselfdisclosure $fullselfdisclosure)
    {
        //
    }
}
