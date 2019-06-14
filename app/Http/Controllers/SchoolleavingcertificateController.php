<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Schoolleavingcertificate;
use App\Http\Resources\SchoolleavingcertificateResource;

class SchoolleavingcertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return SchoolleavingcertificateResource::collection($user->schoolleavingcertificates);
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
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function show(Schoolleavingcertificate $schoolleavingcertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Schoolleavingcertificate $schoolleavingcertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schoolleavingcertificate $schoolleavingcertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schoolleavingcertificate $schoolleavingcertificate)
    {
        //
    }
}
