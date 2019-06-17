<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Dependant;
use Illuminate\Http\Request;
use App\Http\Requests\DependantRequest;
use App\Http\Resources\DependantResource;
use Symfony\Component\HttpFoundation\Response;

class DependantController extends Controller
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
        return DependantResource::collection($user->dependants);
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
    public function store(DependantRequest $request, User $user)
    {
        $dependant = new Dependant;
        $dependant->user_id = $request->user_id;
        $dependant->dependant_name = $request->dependant_name;
        $dependant->relationship = $request->relationship;
        $dependant->date_of_birth = $request->date_of_birth;
        $dependant->gender = $request->gender;
        $dependant->save();
        return response([
            'data' => new DependantResource($dependant)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function show(Dependant $dependant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependant $dependant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Dependant $dependant)
    {
        $dependant->update($request->all());
        return response([
            'data' => new DependantResource($dependant)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Dependant $dependant)
    {
        $dependant->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
