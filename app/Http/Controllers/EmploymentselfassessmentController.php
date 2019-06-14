<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Employmentselfassessment;
use App\Http\Resources\EmploymentselfassessmentResource;

class EmploymentselfassessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return EmploymentselfassessmentResource::collection($user->employmentselfassessments);
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
     * @param  \App\Model\Employmentselfassessment  $employmentselfassessment
     * @return \Illuminate\Http\Response
     */
    public function show(Employmentselfassessment $employmentselfassessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Employmentselfassessment  $employmentselfassessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employmentselfassessment $employmentselfassessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Employmentselfassessment  $employmentselfassessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employmentselfassessment $employmentselfassessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Employmentselfassessment  $employmentselfassessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employmentselfassessment $employmentselfassessment)
    {
        //
    }
}
