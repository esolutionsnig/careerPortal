<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Nationalservice;
use App\Http\Resources\NationalserviceResource;

class NationalserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return NationalserviceResource::collection($user->nationalservices);
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
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function show(Nationalservice $nationalservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Nationalservice $nationalservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nationalservice $nationalservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationalservice $nationalservice)
    {
        //
    }
}
