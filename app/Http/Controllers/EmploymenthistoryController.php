<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Employmenthistory;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\EmploymenthistoryRequest;
use App\Http\Resources\EmploymenthistoryResource;

class EmploymenthistoryController extends Controller
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
        return EmploymenthistoryResource::collection($user->employmenthistories);
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
    public function store(EmploymenthistoryRequest $request, User $user)
    {
        $employmenthistory = new Employmenthistory;
        $employmenthistory->user_id = $request->user_id;
        $employmenthistory->employer_name = $request->employer_name;
        $employmenthistory->employer_address = $request->employer_address;
        $employmenthistory->employer_phone = $request->employer_phone;
        $employmenthistory->job_grade = $request->job_grade;
        $employmenthistory->job_function = $request->job_function;
        $employmenthistory->start_date = $request->start_date;
        $employmenthistory->end_date = $request->end_date;
        $employmenthistory->monthly_income = $request->monthly_income;
        $employmenthistory->reason_for_leaving = $request->reason_for_leaving;
        $employmenthistory->save();
        return response([
            'data' => new EmploymenthistoryResource($employmenthistory)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Employmenthistory  $employmenthistory
     * @return \Illuminate\Http\Response
     */
    public function show(Employmenthistory $employmenthistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Employmenthistory  $employmenthistory
     * @return \Illuminate\Http\Response
     */
    public function edit(Employmenthistory $employmenthistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Employmenthistory  $employmenthistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Employmenthistory $employmenthistory)
    {
        $employmenthistory->update($request->all());
        return response([
            'data' => new EmploymenthistoryResource($employmenthistory)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Employmenthistory  $employmenthistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Employmenthistory $employmenthistory)
    {
        $employmenthistory->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
