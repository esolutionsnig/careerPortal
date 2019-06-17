<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Applicantdatamanager;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ApplicantdatamanagerRequest;
use App\Http\Resources\ApplicantdatamanagerResource;

class ApplicantdatamanagerController extends Controller
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
    public function store(ApplicantdatamanagerRequest $request, User $user)
    {
        $applicantdatamanager = new Applicantdatamanager;
        $applicantdatamanager->user_id = $request->user_id;
        $applicantdatamanager->previous_name = $request->previous_name;
        $applicantdatamanager->why_change_name = $request->why_change_name;
        $applicantdatamanager->birth_date = $request->birth_date;
        $applicantdatamanager->birth_place = $request->birth_place;
        $applicantdatamanager->nationality = $request->nationality;
        $applicantdatamanager->id_card = $request->id_card;
        $applicantdatamanager->gender = $request->gender;
        $applicantdatamanager->physical_defects = $request->physical_defects;
        $applicantdatamanager->region = $request->region;
        $applicantdatamanager->tribe = $request->tribe;
        $applicantdatamanager->tribal_chief = $request->tribal_chief;
        $applicantdatamanager->marital_status = $request->marital_status;
        $applicantdatamanager->number_of_kids = $request->number_of_kids;
        $applicantdatamanager->religion = $request->religion;
        $applicantdatamanager->phone_number = $request->phone_number;
        $applicantdatamanager->height = $request->height;
        $applicantdatamanager->weight = $request->weight;
        $applicantdatamanager->complexion = $request->complexion;
        $applicantdatamanager->color_eyes = $request->color_eyes;
        $applicantdatamanager->color_hair = $request->color_hair;
        $applicantdatamanager->save();
        return response([
            'data' => new ApplicantdatamanagerResource($applicantdatamanager)
        ], Response::HTTP_CREATED);
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
    public function update(Request $request, User $user,  Applicantdatamanager $applicantdatamanager)
    {
        $applicantdatamanager->update($request->all());
        return response([
            'data' => new ApplicantdatamanagerResource($applicantdatamanager)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Applicantdatamanager  $applicantdatamanager
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Applicantdatamanager $applicantdatamanager)
    {
        $applicantdatamanager->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
