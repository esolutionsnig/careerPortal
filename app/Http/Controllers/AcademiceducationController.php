<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Academiceducation;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\AcademiceducationRequest;
use App\Http\Resources\AcademiceducationResource;

class AcademiceducationController extends Controller
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
    public function store(AcademiceducationRequest $request, User $user)
    {
        $academiceducation = new Academiceducation;
        $academiceducation->user_id = $request->user_id;
        $academiceducation->institution = $request->institution;
        $academiceducation->date_of_attendance = $request->date_of_attendance;
        $academiceducation->qualification = $request->qualification;
        $academiceducation->save();
        return response([
            'data' => new AcademiceducationResource($academiceducation)
        ], Response::HTTP_CREATED);
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
    public function update(Request $request, User $user, Academiceducation $academiceducation)
    {
        $academiceducation->update($request->all());
        return response([
            'data' => new AcademiceducationResource($academiceducation)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Academiceducation  $academiceducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Academiceducation $academiceducation)
    {
        $academiceducation->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
