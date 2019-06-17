<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Employmentselfassessment;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\EmploymentselfassessmentRequest;
use App\Http\Resources\EmploymentselfassessmentResource;

class EmploymentselfassessmentController extends Controller
{
    /**
     * Add Middleware to prevent unauthenticated users 
     * from Storing, Updateing of Deleting a record
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

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
    public function store(EmploymentselfassessmentRequest $request, User $user)
    {
        $employmentselfassessment = new Employmentselfassessment;
        $employmentselfassessment->user_id = $request->user_id;
        $employmentselfassessment->interview_date = $request->interview_date;
        $employmentselfassessment->current_engagements = $request->current_engagements;
        $employmentselfassessment->last_monthly_salary = $request->last_monthly_salary;
        $employmentselfassessment->non_cash_incentives = $request->non_cash_incentives;
        $employmentselfassessment->minimum_salary_expectation = $request->minimum_salary_expectation;
        $employmentselfassessment->profile_summary = $request->profile_summary;
        $employmentselfassessment->why_you = $request->why_you;
        $employmentselfassessment->five_years_expectation = $request->five_years_expectation;
        $employmentselfassessment->why_you_left = $request->why_you_left;
        $employmentselfassessment->most_challenging = $request->most_challenging;
        $employmentselfassessment->professional_challenge = $request->professional_challenge;
        $employmentselfassessment->job_accomplishments = $request->job_accomplishments;
        $employmentselfassessment->what_you_offer = $request->what_you_offer;
        $employmentselfassessment->interviewed_by = $request->interviewed_by;
        $employmentselfassessment->interviewed_on = $request->interviewed_on;
        $employmentselfassessment->save();
        return response([
            'data' => new EmploymentselfassessmentResource($employmentselfassessment)
        ], Response::HTTP_CREATED);
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
    public function update(Request $request, User $user, Employmentselfassessment $employmentselfassessment)
    {
        $employmentselfassessment->update($request->all());
        return response([
            'data' => new EmploymentselfassessmentResource($employmentselfassessment)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Employmentselfassessment  $employmentselfassessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Employmentselfassessment $employmentselfassessment)
    {
        $employmentselfassessment->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
