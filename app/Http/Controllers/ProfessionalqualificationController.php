<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Professionalqualification;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProfessionalqualificationRequest;
use App\Http\Resources\ProfessionalqualificationResource;

class ProfessionalqualificationController extends Controller
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
    public function store(ProfessionalqualificationRequest $request, User $user)
    {
        $professionalqualification = new Professionalqualification;
        $professionalqualification->user_id = $request->user_id;
        $professionalqualification->institution = $request->institution;
        $professionalqualification->date_of_attendance = $request->date_of_attendance;
        $professionalqualification->qualification = $request->qualification;
        $professionalqualification->save();
        return response([
            'data' => new ProfessionalqualificationResource($professionalqualification)
        ], Response::HTTP_CREATED);
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
    public function update(Request $request, User $user, Professionalqualification $professionalqualification)
    {
        $professionalqualification->update($request->all());
        return response([
            'data' => new ProfessionalqualificationResource($professionalqualification)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Professionalqualification  $professionalqualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Professionalqualification $professionalqualification)
    {
        $professionalqualification->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
