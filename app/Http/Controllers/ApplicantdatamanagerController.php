<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Applicantdatamanager;
use App\Http\Resources\ApplicantdatamanagerResource;

class ApplicantdatamanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return ApplicantdatamanagerResource::collection($user->applicantdatamanagers);
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
     * @param  \App\Model\Applicantdatamanager  $applicantdatamanager
     * @return \Illuminate\Http\Response
     */
    public function show(Applicantdatamanager $applicantdatamanager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Applicantdatamanager  $applicantdatamanager
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicantdatamanager $applicantdatamanager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Applicantdatamanager  $applicantdatamanager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicantdatamanager $applicantdatamanager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Applicantdatamanager  $applicantdatamanager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicantdatamanager $applicantdatamanager)
    {
        //
    }
}
